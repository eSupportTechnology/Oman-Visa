<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Official Document</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 20px;
            font-size: 13px;
            line-height: 1.6;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>



    {{-- Page 1: Passport Details --}}
    @include('AdminDashboard.pdf.sections.passport', ['data' => $data])

    <div class="page-break"></div>



    {{-- Page 2: Aadhaar / Identity --}}
    @include('AdminDashboard.pdf.sections.aadhaar', ['data' => $data])

    <div class="page-break"></div>



    {{-- Page 3: Police Verification --}}
    @include('AdminDashboard.pdf.sections.police', ['data' => $data])

</body>
</html>
