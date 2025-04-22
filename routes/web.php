<?php

use App\Http\Controllers\BorrowersController;
<<<<<<< HEAD
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;
use App\Models\Repayments;
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Support\Facades\Route;
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

<<<<<<< HEAD
    Route::resource('borrower', BorrowersController::class);
    Route::get('/borrower/{borrower}/print', [BorrowersController::class, 'print'])->name('borrower.print');

    Route::resource('loan', LoanController::class);
    Route::get('/loan/{loan}/print', [LoanController::class, 'print'])->name('loan.print');

    Route::get('/check-payments', function () {
        // Get all repayments
        $repayments = \App\Models\Repayments::with('loan')->get();
        
        // Get the latest repayment
        $latest = \App\Models\Repayments::with('loan')->latest()->first();
        
        // Get raw database records
        $raw = DB::table('repayments')->get();
        
        echo "<pre>";
        echo "<h2>Total Repayments: " . $repayments->count() . "</h2>";
        
        if ($latest) {
            echo "<h3>Latest Repayment:</h3>";
            print_r($latest->toArray());
        }
        
        echo "<h3>All Repayments:</h3>";
        print_r($repayments->toArray());
        
        echo "<h3>Raw Database Records:</h3>";
        print_r($raw->toArray());
        echo "</pre>";
        
        return;
    })->middleware(['auth']);

    Route::get('/admin/debug-repayments', function () {
        $repayments = \App\Models\Repayments::with('loan')->get();
        $data = [
            'count' => $repayments->count(),
            'repayments' => $repayments->map(function($r) {
                return [
                    'id' => $r->id,
                    'loan_id' => $r->loan_id,
                    'payments' => $r->payments,
                    'balance' => $r->balance,
                    'created_at' => $r->created_at,
                    'payments_method' => $r->payments_method,
                    'reference_number' => $r->reference_number,
                    'loan' => $r->loan ? [
                        'id' => $r->loan->id,
                        'loan_number' => $r->loan->loan_number,
                        'loan_status' => $r->loan->loan_status,
                    ] : null
                ];
            })
        ];
        dd($data);
    });
=======
    Route::resource('borrower',BorrowersController::class);
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
});
