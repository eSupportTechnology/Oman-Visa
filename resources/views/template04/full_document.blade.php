<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Official Document</title>
    <style>
        @page { size: A4; margin: 20mm; }
        body { font-family: DejaVu Sans, sans-serif; font-size: 13px; line-height: 1.6; }
        .a4-page { width: 100%; height: 90%; page-break-after: always; }
        .a4-page:last-child { page-break-after: avoid; }
        .signature img { height: 70px; }
    </style>
</head>
<body>
    {{-- Page 1 --}}
    <div class="a4-page">
        @include('AdminDashboard.pdf.sections.passport', ['data' => $data])
    </div>

    {{-- Page 2 --}}
    <div class="a4-page">
        @include('AdminDashboard.pdf.sections.aadhaar', ['data' => $data])
    </div>

    {{-- Page 3 --}}
    <div class="a4-page">
        @include('AdminDashboard.pdf.sections.police', ['data' => $data])
    </div>
</body>
</html>
