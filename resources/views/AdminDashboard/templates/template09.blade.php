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
                <h2>Passport Verification Document Form</h2>
            </div>
            <div class="card-body">

            <form action="{{ route('template09.generate') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="passport_no" class="form-label">Passport Number:</label>
                            <input type="text" name="passport_no" id="passport_no" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="hours" class="form-label">Weekly Working Hours:</label>
                            <input type="number" name="hours" id="hours" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label"> Date:</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>
                      
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                       
                        <div class="mb-3">
                            <label for="salary" class="form-label">Monthly Salary (in TRY):</label>
                            <input type="number" name="salary" id="salary" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="days" class="form-label">Annual Leave Days:</label>
                            <input type="number" name="days" id="days" class="form-control" required>
                        </div>
                       
                        <div class="mb-3">
                            <label for="name" class="form-label"> Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="d-grid">
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
