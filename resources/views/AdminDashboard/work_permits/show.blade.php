@extends('AdminDashboard.master')

@section('title', 'Çalışma İzni Belgesi')

@section('style')
<style>
    /* Ensure A4 Size with proper margins */
    .document-container {
        width: 210mm;
        height: 297mm;
        margin: auto;
        padding: 30px;
        background-color: white;
        border: 2px solid black;
    }
    .header img {
        width: 100px; /* Logo size */
    }
    .barcode {
        font-size: 14px;
        font-weight: bold;
        margin-top: 10px;
    }
    .bold-title {
        font-size: 24px;
        font-weight: bold;
        margin-top: 20px;
    }
</style>
@endsection

@section('content')
<div class="container document-container">
    <!-- Header Section -->
    <div class="row mb-4">
        <div class="col-sm-9 offset-sm-3 ">
            <img src="{{ asset('frontend/assets/images/Picture1.png') }}" alt="Turkish Logo" class="img-fluid">
        </div>
    </div>

    <!-- Barcode Section -->
    <div class="row mb-3">
        <div class="col-sm-9 offset-sm-3 text-end">
            <p class="barcode">TV-{{ $workPermit->reference_no }}</p>
        </div>
    </div>

    <!-- Work Permit Type in Bold -->
    <div class="row">
        <div class="col-sm-9 offset-sm-3 text-center">
            <h2 class="bold-title">{{ strtoupper($workPermit->work_permit_type) }}</h2>
        </div>
    </div>
</div>
@endsection
