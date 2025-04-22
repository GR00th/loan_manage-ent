<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_id',
        'amount',
        'transaction_reference',
        'payment_date',
        'payment_status',
        'notes'
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    public function getPaymentDateAttribute($value)
    {
        return date('d,F Y', strtotime($value));
    }
} 