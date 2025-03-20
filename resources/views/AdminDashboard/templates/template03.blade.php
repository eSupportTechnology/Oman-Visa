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
                    <h5>Input Form for </h5>
                </div>
                <form action="{{ route('template03.generate') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name:</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name:</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="passport_number" class="form-label">Passport Number:</label>
                                    <input type="text" name="passport_number" id="passport_number" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="application_date" class="form-label">Application Date:</label>
                                    <input type="date" name="application_date" id="application_date" class="form-control" required>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="payment_type" class="form-label">Payment Type:</label>
                                    <input type="text" name="payment_type" id="payment_type" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="payment_reference" class="form-label">Payment Reference:</label>
                                    <input type="text" name="payment_reference" id="payment_reference" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="amount_turkish_lira" class="form-label">Amount (Turkish Lira):</label>
                                    <input type="number" step="0.01" name="amount_turkish_lira" id="amount_turkish_lira" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="amount_foreign_currency" class="form-label">Amount (Foreign Currency):</label>
                                    <input type="number" step="0.01" name="amount_foreign_currency" id="amount_foreign_currency" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary">Generate PDF</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
