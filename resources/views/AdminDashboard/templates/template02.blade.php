@extends('AdminDashboard.master')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="card">
                    <div class="card-header">
                    <h5>Add Work Permit Details</h5>
                    </div>

                    <form action="{{ route('template02.generate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <!-- SECTION 1: Personal Information -->
                            <h5 class="text-primary mb-3" >1. Personal Information</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Reference No</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="reference_no" class="form-control" placeholder="Enter Reference No" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">First Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Surname</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="last_name" class="form-control" placeholder="Enter Surname" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Place of Birth</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="place_of_birth" class="form-control" placeholder="Enter Place of Birth" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Date of Birth</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="date_of_birth" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Nationality</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nationality" class="form-control" placeholder="Enter Nationality" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION 2: Passport & Work Permit Details -->
                            <h5 class="text-primary mt-3 mb-3">2. Passport & Work Permit Details</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Passport Number</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="passport_number" class="form-control" placeholder="Enter Passport Number" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Passport Issue Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="passport_issue_date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Passport Expiry Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="passport_expiry_date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Work Permit Type</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="work_permit_type" class="form-control" placeholder="Enter Work Permit Type" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Validity Start Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="work_permit_validity_start" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Validity End Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="work_permit_validity_end" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION 3: Visa and Entry Information -->
                            <h5 class="text-primary mt-3 mb-3">3. Visa and Entry Information</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Number of Entries</label>
                                        <div class="col-sm-8">
                                            <select name="number_of_entries" class="form-control" required>
                                                <option value="1">Single Entry</option>
                                                <option value="2">Multiple Entry</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Validity Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="validity_date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Expiry Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="expiry_date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Residence Duration (Years)</label>
                                        <div class="col-sm-8">
                                            <input type="number" name="residence_duration" class="form-control" min="1" placeholder="Enter duration in years" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Additional Visa Info</label>
                                        <textarea name="additional_visa_info" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Conditions</label>
                                        <textarea name="conditions" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Submit Button -->
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Generate</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
