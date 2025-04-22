<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use PDF;

class LoanController extends Controller
{
    /**
     * Display the specified loan.
     */
    public function show(Loan $loan)
    {
        return view('loans.show', compact('loan'));
    }

    /**
     * Generate PDF for loan details
     */
    public function print(Loan $loan)
    {
        $pdf = PDF::loadView('loans.print', compact('loan'));
        return $pdf->stream('loan-' . $loan->id . '.pdf');
    }
} 