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
                    <h2>Police clearance</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('template08_2.generate') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name:</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="father_name" class="form-label">Father's Name:</label>
                                    <input type="text" name="father_name" id="father_name" class="form-control" value="{{ old('father_name') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="passport_no" class="form-label">Passport Number:</label>
                                    <input type="text" name="passport_no" id="passport_no" class="form-control" value="{{ old('passport_no') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="c_no" class="form-label">c Number:</label>
                                    <input type="text" name="c_no" id="c_no" class="form-control" value="{{ old('c_no') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="issued_date" class="form-label">Issued Date:</label>
                                    <input type="date" name="issued_date" id="issued_date" class="form-control" value="{{ old('issued_date') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age:</label>
                                    <input type="number" name="age" id="age" class="form-control" value="{{ old('age') }}" required>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="date" class="form-label">date:</label>
                                    <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address:</label>
                                    <textarea name="address" id="address" class="form-control" rows="2" required>{{ old('address') }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="district" class="form-label">District:</label>
                                    <input type="text" name="district" id="district" class="form-control" value="{{ old('district') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Start Date:</label>
                                    <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">End Date:</label>
                                    <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Generate PDF</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
