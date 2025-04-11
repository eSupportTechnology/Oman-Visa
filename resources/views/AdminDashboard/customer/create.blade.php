@extends('AdminDashboard.master')

@section('title', 'Add Customer')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5>Add New Customer</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Customer Basic Information -->
                        <div class="border p-3 mb-4 rounded">
                            <h6 class="mb-3">Customer Basic Information</h6>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nationality" class="form-label">Nationality</label>
                                    <input type="text" name="nationality" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <!-- Passport & Work Permit Information -->
                        <div class="border p-3 mb-4 rounded">
                            <h6 class="mb-3">Passport & Work Permit Information</h6>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="passport_number" class="form-label">Passport Number</label>
                                    <input type="text" name="passport_number" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="passport_expiry_date" class="form-label">Passport Expiry Date</label>
                                    <input type="date" name="passport_expiry_date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="work_permit_duration" class="form-label">Work Permit Duration (Years)</label>
                                    <input type="number" name="work_permit_duration" class="form-control" placeholder="Default: 3">
                                </div>
                                <div class="col-md-6">
                                    <label for="work_permit_status" class="form-label">Work Permit Status</label>
                                    <select name="work_permit_status" class="form-control">
                                        <option value="Approved">Approved</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Rejected">Rejected</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="reference_no" class="form-label">Reference Number</label>
                                    <input type="text" name="reference_no" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="visa_type" class="form-label">Visa Type</label>
                                    <input type="text" name="visa_type" class="form-control" placeholder="E.g., Work Visa, Tourist Visa">
                                </div>
                            </div>
                        </div>

                        <!-- Account Information -->
                        <div class="border p-3 mb-4 rounded">
                            <h6 class="mb-3">Account Information</h6>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="re_password" class="form-label">Re-enter Password</label>
                                    <input type="password" name="re_password" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <!-- File Uploads -->
                        <div class="border p-3 mb-4 rounded">
                            <h6 class="mb-3">Upload Files (Optional)</h6>
                            <div class="row">
                                @for ($i = 1; $i <= 9; $i++)
                                <div class="col-md-4 mb-3">
                                    <label for="file{{ $i }}" class="form-label">File {{ $i }}</label>
                                    <input type="file" name="file{{ $i }}" class="form-control">
                                </div>
                                @endfor
                            </div>
                        </div>

                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-primary">Add Customer</button>
                            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
