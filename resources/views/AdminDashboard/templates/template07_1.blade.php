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
                    <h2>Enrollment Form</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('template07_1.generate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="enrollment_number" class="form-label">Enrollment Number:</label>
                                    <input type="text" name="enrollment_number" id="enrollment_number" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name:</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name:</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="dob" class="form-label">Date of Birth:</label>
                                    <input type="date" name="dob" id="dob" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender:</label>
                                    <select name="gender" id="gender" class="form-control" required>
                                        <option value="Male">Erkek / Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address:</label>
                                    <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="mobile_no" class="form-label">Mobile Number:</label>
                                    <input type="text" name="mobile_no" id="mobile_no" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="aadhaar_no" class="form-label">Aadhaar Number:</label>
                                    <input type="text" name="aadhaar_no" id="aadhaar_no" class="form-control" required>
                                </div>
                                
                                <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label">Signature:</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="signature" class="form-control" accept="image/*" required>
                                    </div>
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