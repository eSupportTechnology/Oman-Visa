<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Çalışma İzni Belgesi</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
        }

        .custom-table th, .custom-table td {
            border: 1px solid #ccc;
            padding: 5px;
            font-size: 12px;
            text-align: left;
        }

        .small-text {
            font-size: 10px;
            font-weight: normal;
        }

        .header-logo {
            width: 200px;
        }

        .barcode {
            width: 200px;
        }
    </style>
</head>
<body>
    <div style="text-align: center;">
        <img src="{{ public_path('frontend/assets/images/Picture1.png') }}" alt="Logo" class="header-logo"><br>
        <img src="{{ public_path('barcode.png') }}" alt="Barcode" class="barcode">
        <p>TV-{{ $workPermit->reference_no }}</p>
    </div>

    <h2 style="text-align: center;">{{ strtoupper($workPermit->work_permit_type) }}</h2>

    <table class="custom-table">
        <tr>
            <th>Reference No</th>
            <td>{{ $workPermit->reference_no }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $workPermit->first_name }} {{ $workPermit->last_name }}</td>
        </tr>
        <tr>
            <th>Place of Birth</th>
            <td>{{ $workPermit->place_of_birth }}</td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td>{{ $workPermit->date_of_birth }}</td>
        </tr>
        <tr>
            <th>Nationality</th>
            <td>{{ $workPermit->nationality }}</td>
        </tr>
        <tr>
            <th>Passport Number</th>
            <td>{{ $workPermit->passport_number }}</td>
        </tr>
        <tr>
            <th>Work Permit Validity</th>
            <td>{{ $workPermit->work_permit_validity_start }} to {{ $workPermit->work_permit_validity_end }}</td>
        </tr>
        <tr>
            <th>Number of Entries</th>
            <td>{{ $workPermit->number_of_entries }}</td>
        </tr>
        <tr>
            <th>Validity Date</th>
            <td>{{ $workPermit->validity_date }}</td>
        </tr>
        <tr>
            <th>Expiry Date</th>
            <td>{{ $workPermit->expiry_date }}</td>
        </tr>
        <tr>
            <th>Residence Duration</th>
            <td>{{ $workPermit->residence_duration }}</td>
        </tr>
        <tr>
            <th>Additional Visa Info</th>
            <td>{{ $workPermit->additional_visa_info }}</td>
        </tr>
        <tr>
            <th>Conditions</th>
            <td>{{ $workPermit->conditions }}</td>
        </tr>
    </table>

    <p style="font-size: 10px; margin-top: 20px;">
        Çalışma iznim geçerlidir ve destekleyici belge olarak kabul edilmelidir...
    </p>
</body>
</html>
