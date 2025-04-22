<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Borrower Details</title>
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
        }
        .info-row {
            margin-bottom: 5px;
        }
        .label {
            font-weight: bold;
            display: inline-block;
            width: 150px;
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
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('logo.jpg') }}" alt="Logo" class="logo">
        <h1>Borrower Details</h1>
    </div>

    <div class="section">
        <div class="section-title">Personal Information</div>
        <div class="info-row">
            <span class="label">Full Name:</span>
            <span class="value">{{ $borrower->first_name }} {{ $borrower->last_name }}</span>
        </div>
        <div class="info-row">
            <span class="label">Email:</span>
            <span class="value">{{ $borrower->email }}</span>
        </div>
        <div class="info-row">
            <span class="label">Phone:</span>
            <span class="value">{{ $borrower->mobile }}</span>
        </div>
        <div class="info-row">
            <span class="label">Gender:</span>
            <span class="value">{{ $borrower->gender }}</span>
        </div>
        <div class="info-row">
            <span class="label">Date of Birth:</span>
            <span class="value">{{ $borrower->dob }}</span>
        </div>
        <div class="info-row">
            <span class="label">Occupation:</span>
            <span class="value">{{ $borrower->occupation }}</span>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Address Information</div>
        <div class="info-row">
            <span class="label">Address:</span>
            <span class="value">{{ $borrower->address }}</span>
        </div>
        <div class="info-row">
            <span class="label">City:</span>
            <span class="value">{{ $borrower->city }}</span>
        </div>
        <div class="info-row">
            <span class="label">Province:</span>
            <span class="value">{{ $borrower->province }}</span>
        </div>
        <div class="info-row">
            <span class="label">Zipcode:</span>
            <span class="value">{{ $borrower->zipcode }}</span>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Identification</div>
        <div class="info-row">
            <span class="label">ID Number:</span>
            <span class="value">{{ $borrower->identification }}</span>
        </div>
    </div>

    <div class="footer">
        <p>Generated on: {{ now()->format('Y-m-d H:i:s') }}</p>
        <p>This is a computer-generated document and does not require a signature.</p>
    </div>
</body>
</html> 