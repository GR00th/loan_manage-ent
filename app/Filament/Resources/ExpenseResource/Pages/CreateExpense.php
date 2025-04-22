<?php

namespace App\Filament\Resources\ExpenseResource\Pages;
use Illuminate\Database\Eloquent\Model;

use App\Filament\Resources\ExpenseResource;
use Bavix\Wallet\Models\Wallet;
use App\Models\Expense;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
<<<<<<< HEAD
use Filament\Notifications\Notification;
=======
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0

class CreateExpense extends CreateRecord
{
    protected static string $resource = ExpenseResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array{

   
       
        $wallet = Wallet::findOrFail($data['from_this_account']);
<<<<<<< HEAD

        try{
            $wallet->withdraw($data['expense_amount'], ['meta' => 'Expense amount for ' . $data['expense_name']]);
        }
        catch(\Exception $e){
            Notification::make()
            ->warning()
            ->title('Problem With Wallet')
            ->body('Whoops, something went wrong: ' . $e->getMessage())
            ->persistent()
          
            ->send();
        
        $this->halt();
        }

        
=======
        $wallet->withdraw($data['expense_amount'], ['meta' => 'Expense amount for ' . $data['expense_name']]);
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
        $data['from_this_account'] = $wallet->name;
       
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
