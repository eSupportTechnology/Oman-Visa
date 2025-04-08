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
                    <h2>Police Report Form</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('template07_2.generate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pvr_no" class="form-label">PVR Number:</label>
                                    <input type="text" name="pvr_no" id="pvr_no" class="form-control" required>
                                </div>

                              

                                <div class="mb-3">
                                    <label for="address" class="form-label">Address:</label>
                                    <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="legal_notice" class="form-label">Legal Notice:</label>
                                    <textarea name="legal_notice" id="legal_notice" class="form-control" rows="3" required></textarea>
                                </div>
                            </div>
                            
                            <!-- Right Column -->
                            <div class="col-md-6">
                                
                                <div class="mb-3">
                                    <label for="publication_date" class="form-label">Publication Date:</label>
                                    <input type="date" name="publication_date" id="publication_date" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="approval" class="form-label">Approval:</label>
                                    <textarea name="approval" id="approval" class="form-control" rows="3" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="Issuance" class="form-label">Issuance Place:</label>
                                    <input type="text" name="Issuance" id="Issuance" class="form-control" required>
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
