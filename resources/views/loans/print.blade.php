<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Loan Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 10px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        .info-row {
            margin-bottom: 5px;
        }
        .label {
            font-weight: bold;
            display: inline-block;
            width: 200px;
        }
        .value {
            display: inline-block;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('logo.jpg') }}" alt="Logo" class="logo">
        <h1>Loan Details</h1>
    </div>

    <div class="section">
        <div class="section-title">Loan Information</div>
        <table>
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

    <div class="section">
        <div class="section-title">Borrower Information</div>
        <table>
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

    <div class="section">
        <div class="section-title">Payment History</div>
        <table>
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

    <div class="footer">
        <p>Generated on: {{ now()->format('Y-m-d H:i:s') }}</p>
        <p>This is a computer-generated document and does not require a signature.</p>
    </div>
</body>
</html> 