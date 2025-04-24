@extends('AdminDashboard.master')

@section('content')
<style>
    @page {
        size: A4;
        margin: 20mm;
    }

    body {
        font-family: DejaVu Sans, sans-serif;
        font-size: 13px;
        line-height: 1.6;
        background-color: #f2f2f2;
    }

    .a4-page {
        width: 210mm;
        height: 297mm;
        background: white;
        margin: 20px auto;
        padding: 20mm;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        position: relative;
        page-break-after: always;
    }

    .a4-page:last-child {
        page-break-after: avoid;
    }

    .signature img {
        height: 60px;
    }

    /* Optional: Remove page break for print preview in web */
    @media print {
        body {
            background-color: white;
        }
        .a4-page {
            box-shadow: none;
            page-break-after: always;
        }
    }
</style>

<div class="container mt-4">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('template04.pdf', $data->id) }}" class="btn btn-primary">Download PDF</a>


    {{-- Page 1: Passport Details --}}
    <div class="a4-page">
        @include('AdminDashboard.pdf.sections.passport', ['data' => $data])
    </div>

    {{-- Page 2: Aadhaar / Identity --}}
    <div class="a4-page">
        @include('AdminDashboard.pdf.sections.aadhaar', ['data' => $data])
    </div>

    {{-- Page 3: Police Verification --}}
    <div class="a4-page">
        @include('AdminDashboard.pdf.sections.police', ['data' => $data])
    </div>
</div>
@endsection