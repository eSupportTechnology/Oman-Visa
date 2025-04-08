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
                <h2>Job Offer Letter Entry</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('template06.generate') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Recipient Information -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="passport_number" class="form-label">Passport Number:</label>
                        <input type="text" name="passport_number" id="passport_number" class="form-control" required>
                    </div>

                    <!-- Job Offer Details -->
                    <div class="mb-3">
                        <label for="position" class="form-label">Position:</label>
                        <input type="text" name="position" id="position" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="salary" class="form-label">Monthly Salary (Turkish Lira):</label>
                        <input type="number" step="0.01" name="salary" id="salary" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="working_hours" class="form-label">Working Hours:</label>
                        <input type="text" name="working_hours" id="working_hours" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="work_location" class="form-label">Work Location:</label>
                        <textarea name="work_location" id="work_location" class="form-control" rows="3" required></textarea>
                    </div>

                    <!-- Date -->
                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Signature:</label>
                        <div class="col-sm-8">
                            <input type="file" name="signature" class="form-control" accept="image/*" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Generate PDF</button>
                </form>
            </div>            
        </div>

        </div>
    </div>
</div>
@endsection