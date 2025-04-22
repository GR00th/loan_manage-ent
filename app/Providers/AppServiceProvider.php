<?php

namespace App\Providers;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use App\Filament\CustomLogOutResponse;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse as LogoutResponseContract;
=======
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        $this->app->bind(LogoutResponseContract::class, CustomLogOutResponse::class);
=======
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
        Model::unguard();
        Filament::registerNavigationGroups([
            'Customers',
            'Loan Agreement Forms',
            'Wallets',
            'Loans',            
            'Expenses',
            'Repayments',
            'Addons',
        ]);
    }
}
