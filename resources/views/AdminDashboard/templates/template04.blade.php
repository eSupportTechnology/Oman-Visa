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
                    <h5>Job Offer Letter Entry</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('template04.generate') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name:</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="id_number" class="form-label">ID Number:</label>
                                    <input type="text" name="id_number" id="id_number" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="position" class="form-label">Position:</label>
                                    <input type="text" name="position" id="position" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="salary" class="form-label">Monthly Salary (Turkish Lira):</label>
                                    <input type="number" step="0.01" name="salary" id="salary" class="form-control" required>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="working_hours" class="form-label">Working Hours:</label>
                                    <input type="text" name="working_hours" id="working_hours" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="work_location" class="form-label">Work Location:</label>
                                    <textarea name="work_location" id="work_location" class="form-control" rows="3" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="date" class="form-label">Date:</label>
                                    <input type="date" name="date" id="date" class="form-control" required>
                                </div>
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
