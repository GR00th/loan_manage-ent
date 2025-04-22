<?php

namespace App\Filament\Resources\TransfersResource\Pages;

use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\TransfersResource;
<<<<<<< HEAD
use Filament\Notifications\Notification;
=======
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
use Bavix\Wallet\Models\Wallet;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTransfers extends CreateRecord
{
    protected static string $resource = TransfersResource::class;
    protected static ?string $navigationIcon = 'fas-wallet';
    protected static ?string $navigationGroup = 'Wallets';
    
    protected ?string $heading = 'Funds Transfer';

    protected function handleRecordCreation(array $data): Model
    {
       
        $firstWallet = Wallet::findOrFail($data['from_this_account']);
        $lastWallet = Wallet::findOrFail($data['to_this_account']);
<<<<<<< HEAD
        try{
            $firstWallet->transfer($lastWallet, $data['amount_to_transfer']);
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
        $firstWallet->transfer($lastWallet, $data['amount_to_transfer']);
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0

        return $firstWallet;
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
