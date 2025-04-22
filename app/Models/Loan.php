<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Loan extends Model
{
    use HasFactory;
    

    public function loan_type()
    {
        
        return $this->belongsTo(LoanType::class, 'loan_type_id','id');
    }

    public function borrower()
    {
        
        return $this->belongsTo(Borrower::class, 'borrower_id','id');
    }

<<<<<<< HEAD
    public function payments()
    {
        return $this->hasMany(LoanPayment::class);
    }

    public function repayments()
    {
        return $this->hasMany(Repayments::class);
    }

=======
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
    public function getLoanDueDateAttribute($value) {
        return date('d,F Y', strtotime($value));
    }


    protected $casts = [
        'activate_loan_agreement_form' => 'boolean',
    ];
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'balance',
        'loan_status',
    ];


}
