@extends('AdminDashboard.master')

@section('title', 'Edit Customer')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-3">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <h5>Edit Customer</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Basic Info -->
                        <div class="border p-3 mb-4 rounded">
                            <h6>Basic Info</h6>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $customer->name }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Nationality</label>
                                    <input type="text" name="nationality" class="form-control" value="{{ $customer->nationality }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dob" class="form-control" value="{{ $customer->dob }}">
                                </div>
                                <div class="col-md-6">
                                    <label>Visa Type</label>
                                    <input type="text" name="visa_type" class="form-control" value="{{ $customer->visa_type }}">
                                </div>
                            </div>
                        </div>

                        <!-- Passport & Permit -->
                        <div class="border p-3 mb-4 rounded">
                            <h6>Passport & Permit</h6>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label>Passport Number</label>
                                    <input type="text" name="passport_number" class="form-control" value="{{ $customer->passport_number }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Passport Expiry Date</label>
                                    <input type="date" name="passport_expiry_date" class="form-control" value="{{ $customer->passport_expiry_date }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label>Work Permit Duration (Years)</label>
                                    <input type="number" name="work_permit_duration" class="form-control" value="{{ $customer->work_permit_duration }}">
                                </div>
                                <div class="col-md-6">
                                    <label>Work Permit Status</label>
                                    <select name="work_permit_status" class="form-control">
                                        <option value="Approved" {{ $customer->work_permit_status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                        <option value="Pending" {{ $customer->work_permit_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Rejected" {{ $customer->work_permit_status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label>Reference Number</label>
                                    <input type="text" name="reference_no" class="form-control" value="{{ $customer->reference_no }}">
                                </div>
                            </div>
                        </div>

                       <!-- File Uploads -->
                        <div class="border p-3 mb-4 rounded">
                            <h6>Uploaded Files</h6>
                            <div class="row">
                                @for ($i = 1; $i <= 9; $i++)
                                @php
                                    $fileField = 'file' . $i;
                                    $existingFile = $customer->$fileField ?? null;
                                @endphp
                                <div class="col-md-6 mb-3">
                                    <label for="{{ $fileField }}" class="form-label">File {{ $i }}</label>

                                    @if ($existingFile)
                                        <div class="mb-1">
                                            <a href="{{ asset('storage/' . $existingFile) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                                View Current File {{ $i }}
                                            </a>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="delete_files[]" value="{{ $fileField }}" class="form-check-input" id="delete_{{ $fileField }}">
                                            <label class="form-check-label text-danger" for="delete_{{ $fileField }}">Delete this file</label>
                                        </div>
                                    @endif

                                    <input type="file" name="{{ $fileField }}" class="form-control mt-1">
                                </div>
                                @endfor
                            </div>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Update Customer</button>
                            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
