<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repayments extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
        'loan_id',
        'payments',
        'balance',
        'principal',
        'payments_method',
        'reference_number'
    ];

    protected $casts = [
        'payments' => 'decimal:2',
        'balance' => 'decimal:2',
        'principal' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // Add debugging to track model events
    protected static function booted()
    {
        static::created(function ($repayment) {
            \Illuminate\Support\Facades\Log::info('New Repayment Created:', $repayment->toArray());
        });
    }

    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loan_id');
    }

    protected static function boot()
    {
        parent::boot();
        
        // Add global scope to always load with loan
        static::addGlobalScope('with_loan', function ($builder) {
            $builder->with('loan');
        });
    }

    public function loan_number()
    {
        return $this->belongsTo(Loan::class, 'loan_id', 'id');
    }

    public function getCreatedAtAttribute($value) {
        return date('d M Y H:i:s', strtotime($value));
    }
=======
    public function loan_number()
{
    return $this->belongsTo(Loan::class, 'loan_id', 'id');
}

public function getCreatedAtAttribute($value) {
    return date('d,F Y H:m:i', strtotime($value));
}
  
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
}
