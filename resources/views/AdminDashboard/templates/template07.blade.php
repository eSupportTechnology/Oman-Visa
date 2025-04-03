
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
            <div class="card mt-4">
            <div class="card-header">
                <h2>Passport Information Form</h2>
            </div>
        <div class="card-body">
            <form action="{{ route('template07.generate') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="passport_number" class="form-label">Passport Number:</label>
                            <input type="text" name="passport_number" id="passport_number" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="nationality" class="form-label">Nationality:</label>
                            <input type="text" name="nationality" id="nationality" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="date_of_birth" class="form-label">Date of Birth:</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="place_of_birth" class="form-label">Place of Birth:</label>
                            <input type="text" name="place_of_birth" id="place_of_birth" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="issuance_location" class="form-label">Issuance Location:</label>
                            <input type="text" name="issuance_location" id="issuance_location" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="issue_date" class="form-label">Issue Date:</label>
                            <input type="date" name="issue_date" id="issue_date" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="expiry_date" class="form-label">Expiry Date:</label>
                            <input type="date" name="expiry_date" id="expiry_date" class="form-control" required>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="mrz" class="form-label">Machine-Readable Zone (MRZ):</label>
                            <textarea name="mrz" id="mrz" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="father_name" class="form-label">Father's Name:</label>
                            <input type="text" name="father_name" id="father_name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="mother_name" class="form-label">Mother's Name:</label>
                            <input type="text" name="mother_name" id="mother_name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address:</label>
                            <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="old_passport_number" class="form-label">Old Passport Number:</label>
                            <input type="text" name="old_passport_number" id="old_passport_number" class="form-control">
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Generate PDF</button>
                        </div>
                    </div>
                </div> 
            </form>
        </div>
        </div>
    </div>
</div>
</div>
@endsection