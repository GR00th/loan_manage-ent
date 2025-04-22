@include('layouts.header')
@include('layouts.navigation')
@include('layouts.menu')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Loan Details</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Loan #{{ $loan->id }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-12">
                    <a href="{{ route('loan.print', $loan->id) }}" class="btn btn-primary" target="_blank">
                        <i class="fas fa-print"></i> Print Loan Details
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Loan Information</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Loan Type</th>
                                <td>{{ $loan->loan_type->name ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Principal Amount</th>
                                <td>{{ number_format($loan->principal_amount, 2) }}</td>
                            </tr>
                            <tr>
                                <th>Interest Rate</th>
                                <td>{{ $loan->interest_rate }}%</td>
                            </tr>
                            <tr>
                                <th>Loan Duration</th>
                                <td>{{ $loan->loan_duration }} months</td>
                            </tr>
                            <tr>
                                <th>Repayment Amount</th>
                                <td>{{ number_format($loan->repayment_amount, 2) }}</td>
                            </tr>
                            <tr>
                                <th>Loan Status</th>
                                <td>{{ $loan->loan_status }}</td>
                            </tr>
                            <tr>
                                <th>Release Date</th>
                                <td>{{ $loan->loan_release_date }}</td>
                            </tr>
                            <tr>
                                <th>Due Date</th>
                                <td>{{ $loan->loan_due_date }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Borrower Information</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <td>{{ $loan->borrower->first_name }} {{ $loan->borrower->last_name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $loan->borrower->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $loan->borrower->mobile }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $loan->borrower->address }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Payment History</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($loan->payments as $payment)
                                <tr>
                                    <td>{{ $payment->payment_date }}</td>
                                    <td>{{ number_format($payment->amount, 2) }}</td>
                                    <td>{{ $payment->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@include('layouts.footer') 