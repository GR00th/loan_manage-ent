<?php

namespace App\Filament\Resources\RepaymentsResource\Pages;

use App\Filament\Resources\RepaymentsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRepayments extends ListRecords
{
    protected static string $resource = RepaymentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        $query = parent::getTableQuery()->with('loan');
        \Illuminate\Support\Facades\Log::info('Repayments Query:', [
            'sql' => $query->toSql(),
            'bindings' => $query->getBindings(),
            'count' => $query->count()
        ]);
        return $query;
    }

    public function mount(): void
    {
        parent::mount();
        
        // Log all repayments for debugging
        $repayments = \App\Models\Repayments::with('loan')->get();
        \Illuminate\Support\Facades\Log::info('All Repayments:', [
            'count' => $repayments->count(),
            'data' => $repayments->toArray()
        ]);
        
        $this->refreshRecords();
    }
}
