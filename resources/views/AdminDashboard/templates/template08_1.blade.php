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
                    <h2>Registration Form</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('template08_1.generate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="recode_no" class="form-label">Recode Number:</label>
                                    <input type="text" name="recode_no" id="recode_no" class="form-control" value="{{ old('recode_no') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="enrolment_no" class="form-label">Enrolment Number:</label>
                                    <input type="text" name="enrolment_no" id="enrolment_no" class="form-control" value="{{ old('enrolment_no') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="reciver" class="form-label">Receiver:</label>
                                    <input type="text" name="reciver" id="reciver" class="form-control" value="{{ old('reciver') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="father_name" class="form-label">Father's Name:</label>
                                    <input type="text" name="father_name" id="father_name" class="form-control" value="{{ old('father_name') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="ev_no" class="form-label">House No:</label>
                                    <input type="text" name="ev_no" id="ev_no" class="form-control" value="{{ old('ev_no') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="region" class="form-label">Region:</label>
                                    <input type="text" name="region" id="region" class="form-control" value="{{ old('region') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="city" class="form-label">City:</label>
                                    <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="district" class="form-label">District:</label>
                                    <input type="text" name="district" id="district" class="form-control" value="{{ old('district') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="state" class="form-label">State:</label>
                                    <input type="text" name="state" id="state" class="form-control" value="{{ old('state') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="zip_code" class="form-label">Zip Code:</label>
                                    <input type="text" name="zip_code" id="zip_code" class="form-control" value="{{ old('zip_code') }}" required>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">Phone Number:</label>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="aadhar_no" class="form-label">Aadhaar Number:</label>
                                    <input type="text" name="aadhar_no" id="aadhar_no" class="form-control" value="{{ old('aadhar_no') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="vid_no" class="form-label">VID:</label>
                                    <input type="text" name="vid_no" id="vid_no" class="form-control" value="{{ old('vid_no') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="dob" class="form-label">Date of Birth:</label>
                                    <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender:</label>
                                    <select name="gender" id="gender" class="form-control" required>
                                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="aadhaar_message" class="form-label">Aadhaar Information:</label>
                                    <textarea name="aadhaar_message" id="aadhaar_message" class="form-control" rows="3" required>Aadhaar, kimlik kanitidir, vatandaşlik veya doğum tarihi kaniti değilidir.</textarea>
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
