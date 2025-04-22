<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\StatsOverviewResource\Widgets\AdminChart;
use App\Models\Loan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Carbon\CarbonImmutable;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Database\Eloquent\Builder;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;

class StatsOverview extends BaseWidget
{
    use InteractsWithPageFilters;
    use HasWidgetShield;
    protected static ?string $maxHeight = '100px';
    protected static ?int $sort = 1;
    public function getColumns(): int
    {
        return 2;
    }


    protected function getStats(): array
    {
        $startDate = $this->filters['startDate'] ?? null;
        $endDate = $this->filters['endDate'] ?? null;
        return [


            Stat::make('Active Loans', Loan::query()
                ->when($startDate, fn(Builder $query) => $query->whereDate('created_at', '>=', $startDate))
                ->when($endDate, fn(Builder $query) => $query->whereDate('created_at', '<=', $endDate))
                ->where('loan_status', 'approved')
<<<<<<< HEAD
                ->orWhere('loan_status', 'partially_paid')
                ->count())
                ->description('Active Loans')
                ->descriptionIcon('fas-wallet')
                ->color('info')
                ->url('admin/loans'),
=======
                ->count())
                ->description('Active Loans')
                ->descriptionIcon('fas-wallet')
                ->color('info'),
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0

            Stat::make('Pending Loans', Loan::query()
                ->when($startDate, fn(Builder $query) => $query->whereDate('created_at', '>=', $startDate))
                ->when($endDate, fn(Builder $query) => $query->whereDate('created_at', '<=', $endDate))
                ->where('loan_status', 'processing')
                ->count(), )
                ->description('Pending Loans')
                ->descriptionIcon('fas-clock')
<<<<<<< HEAD
                ->color('primary')
                ->url('admin/loans?activeTab=Processing'),

=======
                ->color('primary'),
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            Stat::make('Defaulted Loans', Loan::query()
                ->when($startDate, fn(Builder $query) => $query->whereDate('created_at', '>=', $startDate))
                ->when($endDate, fn(Builder $query) => $query->whereDate('created_at', '<=', $endDate))
                ->where('loan_status', 'defaulted')
                ->count(), )
                ->description('Defaulted Loans')
                ->descriptionIcon('fas-sync')
<<<<<<< HEAD
                ->color('danger')
                ->url('admin/loans?activeTab=Over+Due'),
=======
                ->color('danger'),
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0


            Stat::make('Fully Paid Loans', Loan::query()
                ->when($startDate, fn(Builder $query) => $query->whereDate('created_at', '>=', $startDate))
                ->when($endDate, fn(Builder $query) => $query->whereDate('created_at', '<=', $endDate))
                ->where('loan_status', 'fully_paid')
                ->count())
                ->description('Fully Paid Loans')
                ->descriptionIcon('fas-wallet')
                ->color('success')
<<<<<<< HEAD
                ->url('admin/loans?activeTab=Settled')
=======
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0










        ];
    }
}
