@extends('AdminDashboard.master')

@section('content')
<div class="container-fluid">
    <form action="{{ route('template04.generate') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Page 1: Passport Details -->
        <div class="card mb-4">
            <div class="card-header"><h5>Passport Details (Page 1)</h5></div>
            <div class="card-body row">
                <div class="col-md-6">
                    <label>Passport Type</label>
                    <input type="text" name="type" class="form-control">

                    <label>Country Code</label>
                    <input type="text" name="country_code" class="form-control">

                    <label>Passport Number</label>
                    <input type="text" name="passport_number" class="form-control" required>

                    <label>Full Name</label>
                    <input type="text" name="full_name" class="form-control" required>

                    <label>Nationality</label>
                    <input type="text" name="nationality" class="form-control" required>

                    <label>Date of Birth</label>
                    <input type="date" name="dob" class="form-control" required>

                    <label>Gender</label>
                    <select name="gender" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                    <label>Place of Birth</label>
                    <input type="text" name="birth_place" class="form-control">

                    <label>Address</label>
                    <textarea name="address" class="form-control" rows="3"></textarea>
                </div>

                <div class="col-md-6">
                    <label>Issued At</label>
                    <input type="text" name="issued_at" class="form-control">

                    <label>Date of Issue</label>
                    <input type="date" name="issue_date" class="form-control">

                    <label>Date of Expiry</label>
                    <input type="date" name="expiry_date" class="form-control">

                    <label>MRZ (Machine Readable Zone)</label>
                    <textarea name="mrz" class="form-control" rows="3"></textarea>

                    <label>Father's Name</label>
                    <input type="text" name="father_name" class="form-control">

                    <label>Mother's Name</label>
                    <input type="text" name="mother_name" class="form-control">

                    <label>Old Passport Number</label>
                    <input type="text" name="old_passport" class="form-control">

                    <label>Signature Image Upload</label>
                    <input type="file" name="signature1" class="form-control" accept="image/*" required>
                </div>
            </div>
        </div>

        <!-- Page 2: Aadhaar / Identity Details -->
        <div class="card mb-4">
            <div class="card-header"><h5>Aadhaar / Identity Details (Page 2)</h5></div>
            <div class="card-body row">
                <div class="col-md-6">
                    <label>Enrollment Number</label>
                    <input type="text" name="aadhaar_enroll_no" class="form-control">

                    <label>Recipient Name</label>
                    <input type="text" name="aadhaar_recipient" class="form-control">

                    <label>C/O</label>
                    <input type="text" name="aadhaar_care_of" class="form-control">

                    <label>Address</label>
                    <textarea name="aadhaar_address" class="form-control" rows="4"></textarea>

                    <label>Mobile Number</label>
                    <input type="text" name="aadhaar_mobile" class="form-control">

                    <label>Aadhaar Number</label>
                    <input type="text" name="aadhaar_number" class="form-control">
                </div>

                <div class="col-md-6">
                    <label>My Identity Label</label>
                    <input type="text" name="aadhaar_identity_label" class="form-control">

                    <label>Full Name</label>
                    <input type="text" name="aadhaar_full_name" class="form-control">

                    <label>Date of Birth</label>
                    <input type="date" name="aadhaar_dob" class="form-control">

                    <label>Gender</label>
                    <select name="aadhaar_gender" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>

                    <label>Signature Image Upload</label>
                    <input type="file" name="signature2" class="form-control" accept="image/*" required>
                </div>
            </div>
        </div>

        <!-- Page 3: Police Verification -->
        <div class="card mb-4">
            <div class="card-header"><h5>Police Verification Report (Page 3)</h5></div>
            <div class="card-body row">
                <div class="col-md-6">
                    <label>PVR Number</label>
                    <input type="text" name="pvr_no" class="form-control" required>

                    <label>Date of Issue</label>
                    <input type="date" name="pvr_issue_date" class="form-control" required>

                    <label>Full Name</label>
                    <input type="text" name="pvr_name" class="form-control" required>

                    <label>Verified Address</label>
                    <textarea name="pvr_address" class="form-control" rows="3" required></textarea>
                </div>

                <div class="col-md-6">
                    <label>Remarks</label>
                    <input type="text" name="pvr_remarks" class="form-control">

                    <label>Verification Place</label>
                    <input type="text" name="pvr_place" class="form-control" required>

                    <label>Report Date</label>
                    <input type="date" name="pvr_report_date" class="form-control" required>

                    <label>Signature Image Upload</label>
                    <input type="file" name="signature3" class="form-control" accept="image/*" required>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center mb-4">
            <button type="submit" class="btn btn-primary">Generate Document PDF</button>
        </div>
    </form>
</div>
@endsection
