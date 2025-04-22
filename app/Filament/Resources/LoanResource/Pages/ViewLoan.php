<?php

namespace App\Filament\Resources\LoanResource\Pages;

use App\Filament\Resources\LoanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
<<<<<<< HEAD
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ViewEntry;
use Filament\Infolists\Infolist;
use Filament\Actions\Action;
=======
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0

class ViewLoan extends ViewRecord
{
    protected static string $resource = LoanResource::class;

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            Action::make('print')
                ->label('Print Details')
                ->icon('heroicon-o-printer')
                ->url(fn () => route('loan.print', ['loan' => $this->record]))
                ->openUrlInNewTab()
                ->color('success'),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Loan Details')
                    ->schema([
                        TextEntry::make('borrower.full_name')
                            ->label('Borrower'),
                        TextEntry::make('loan_type.loan_name')
                            ->label('Loan Type'),
                        TextEntry::make('principal_amount')
                            ->label('Principal Amount')
                            ->money('ZMW'),
                        TextEntry::make('interest_rate')
                            ->label('Interest Rate')
                            ->suffix('%'),
                        TextEntry::make('loan_duration')
                            ->label('Loan Duration')
                            ->suffix(fn ($record) => $record->duration_period),
                        TextEntry::make('loan_release_date')
                            ->label('Release Date'),
                        TextEntry::make('loan_due_date')
                            ->label('Due Date'),
                        TextEntry::make('loan_status')
                            ->label('Status')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'requested' => 'gray',
                                'processing' => 'info',
                                'approved' => 'success',
                                'fully_paid' => 'success',
                                'denied' => 'danger',
                                'defaulted' => 'warning',
                                default => 'warning',
                            }),
                    ])
                    ->columns(2),
                
                Section::make('')
                    ->schema([
                        ViewEntry::make('amortization_schedule')
                            ->view('components.loan-amortization-table', ['loan' => $this->record])
                            ->columnSpanFull()
                    ])
                    ->collapsible(false)
            ]);
    }
=======
            Actions\EditAction::make(),
        ];
    }
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
}
