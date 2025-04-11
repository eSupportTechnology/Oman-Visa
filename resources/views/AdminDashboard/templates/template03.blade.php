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
                    <h5>Input Form for Template 03</h5>
                </div>

                <form action="{{ route('template03.generate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">Name:</label>
                                    <input type="text" name="name" id="first_name" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="passport_number" class="form-label">Passport Number:</label>
                                    <input type="text" name="passport_number" id="passport_number" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="application_date" class="form-label">Application Date:</label>
                                    <input type="date" name="application_date" id="application_date" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="seri_no" class="form-label">Seri No:</label>
                                    <input type="text" name="seri_no" id="seri_no" class="form-control" required>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="sam_no" class="form-label">Sam No:</label>
                                    <input type="text" name="sam_no" id="sam_no" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="ozel_no" class="form-label">Özel No:</label>
                                    <input type="text" name="ozel_no" id="ozel_no" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="reference_number" class="form-label">Reference Number:</label>
                                    <input type="text" name="reference_number" id="reference_number" class="form-control" required>
                                </div>
                                
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Generate PDF</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
