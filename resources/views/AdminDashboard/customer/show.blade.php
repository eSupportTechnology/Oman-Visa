@extends('AdminDashboard.master')

@section('title', 'Customer Details')

@section('content')
<div class="container-fluid">
    <div class="card mt-7">
        <div class="card-header bg-info text-white mt-3">
            <h5>Customer Details</h5>
        </div>
        <div class="card-body row">

            <div class="col-md-6">
                <h6 class=" mb-2">Basic Information</h6>
                <p><strong>Name:</strong> {{ $customer->name }}</p>
                <p><strong>Nationality:</strong> {{ $customer->nationality }}</p>
                <p><strong>Date of Birth:</strong> {{ $customer->dob ? \Carbon\Carbon::parse($customer->dob)->format('d M Y') : 'N/A' }}</p>
                <p><strong>Reference Number:</strong> {{ $customer->reference_no ?? 'N/A' }}</p>
                <p><strong>Visa Type:</strong> {{ $customer->visa_type ?? 'N/A' }}</p>
            </div>

            <div class="col-md-6">
                <h6 class=" mb-2">Passport & Work Permit</h6>
                <p><strong>Passport Number:</strong> {{ $customer->passport_number }}</p>
                <p><strong>Passport Expiry Date:</strong> {{ $customer->passport_expiry_date ? \Carbon\Carbon::parse($customer->passport_expiry_date)->format('d M Y') : 'N/A' }}</p>
                <p><strong>Work Permit Duration:</strong> {{ $customer->work_permit_duration }} years</p>
                <p>
                    <strong>Work Permit Status:</strong>
                    @php
                        $status = $customer->work_permit_status;
                        $badgeClass = match($status) {
                            'Approved' => 'bg-success',
                            'Pending' => 'bg-warning text-dark',
                            'Rejected' => 'bg-danger',
                            default => 'bg-secondary'
                        };
                    @endphp
                    <span class="badge {{ $badgeClass }}">{{ $status ?? 'N/A' }}</span>
                </p>
            </div>
        </div>

        <div class="card-footer">
            <h6 class="mb-3">Uploaded Files</h6>
            <div class="row">
                @for ($i = 1; $i <= 9; $i++)
                    @php $fileField = 'file' . $i; @endphp
                    @if($customer->$fileField)
                        <div class="col-md-4 mb-3">
                            <p><strong>File {{ $i }}</strong></p>
                            <a href="{{ asset('storage/' . $customer->$fileField) }}" target="_blank">
                                <img src="{{ asset('storage/' . $customer->$fileField) }}" alt="Document {{ $i }}" class="img-thumbnail" style="max-height: 150px;">
                            </a>
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>

    <div class="mt-3 text-center">
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
