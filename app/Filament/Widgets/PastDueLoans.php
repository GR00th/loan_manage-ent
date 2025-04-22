<?php

namespace App\Filament\Widgets;

use App\Models\Loan;
use Filament\Widgets\BarChartWidget;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Database\Eloquent\Builder;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;

class PastDueLoans extends BarChartWidget
{
    use InteractsWithPageFilters;
    use HasWidgetShield;

    protected static ?int $sort = 4;

    public function getHeading(): string
    {
        return 'Past Due Loans by Days Overdue';
    }

    protected function getData(): array
    {
        $startDate = $this->filters['startDate'] ?? null;
        $endDate = $this->filters['endDate'] ?? null;
        
        $today = Carbon::today();
        
        $categories = [
            '0 days' => 0,
            '1-29 days' => 0,
            '30-59 days' => 0,
            '60-89 days' => 0,
            '90-120 days' => 0,
            '120+ days' => 0,
        ];
        
        $loans = Loan::query()
            ->when($startDate, fn(Builder $query) => $query->whereDate('created_at', '>=', $startDate))
            ->when($endDate, fn(Builder $query) => $query->whereDate('created_at', '<=', $endDate))
            ->where('loan_status', '!=', 'fully_paid')
            ->get();
            
        foreach ($loans as $loan) {
            // Parse the date string by removing the comma and converting to Carbon
            $dueDateStr = str_replace(',', '', $loan->loan_due_date);
            $dueDate = Carbon::createFromFormat('d F Y', $dueDateStr);
            $daysOverdue = $today->diffInDays($dueDate, false);
            
            if ($daysOverdue < 0) {
                if ($daysOverdue >= -29) {
                    $categories['1-29 days']++;
                } elseif ($daysOverdue >= -59) {
                    $categories['30-59 days']++;
                } elseif ($daysOverdue >= -89) {
                    $categories['60-89 days']++;
                } elseif ($daysOverdue >= -120) {
                    $categories['90-120 days']++;
                } else {
                    $categories['120+ days']++;
                }
            } else {
                $categories['0 days']++;
            }
        }
        
        return [
            'datasets' => [
                [
                    'label' => 'Number of Loans',
                    'data' => array_values($categories),
                    'backgroundColor' => [
                        '#10B981', // 0 days - green
                        '#F59E0B', // 1-29 days - yellow
                        '#F97316', // 30-59 days - orange
                        '#EF4444', // 60-89 days - red
                        '#DC2626', // 90-120 days - dark red
                        '#7F1D1D', // 120+ days - darker red
                    ],
                ],
            ],
            'labels' => array_keys($categories),
        ];
    }
} 