<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body, html {
            height: 100%;
        }

        .page-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .logo {
            height: 70px;
            margin-left: 100px;
        }

        footer {
            background-color: #d71920;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }

        .highlight-bar {
            background-color: #d71920;
        }

        .section-title {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 15px;
            border-bottom: 2px solid #d71920;
            padding-bottom: 5px;
        }

        .status-box {
            background-color: #fddede;
            border-left: 5px solid #d71920;
            padding: 15px 20px;
            font-size: 16px;
            font-weight: 600;
            color: #bb181c;
            margin-bottom: 25px;
            border-radius: 4px;
        }

        .info-table th {
            width: 40%;
            background-color: #f9f9f9;
            font-weight: 600;
        }

        .info-table td {
            background-color: #fff;
        }

        .info-table {
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<div class="page-wrapper">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #d71920; padding:20px 0;">
        <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex align-items-center">
                <img src="{{ asset('red.png') }}" alt="Logo" class="me-4 logo">
            </div>

            <div class="text-white text-start flex-grow-1">
                <h6 class="fw-bold">T.C. Çalışma ve Sosyal Güvenlik Bakanlığı</h6>
                <h6>Ministry of Labor and Social Security</h6>
            </div>

            <div class="d-flex align-items-center">
                <form method="POST" action="{{ route('logouttt') }}">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-light text-danger fw-bold">
                        Logout
                    </button>
                </form>
            </div>
        </div>

    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="shadow-sm border rounded p-4">
            <div class="highlight-bar text-white p-2 mb-3">
                <small>Çalışma İzni Bilgileri (Work Permit Details)</small>
            </div>

            <!-- Work Permit Status Highlight -->
            @php
                $status = strtolower($customer->work_permit_status);
                $badgeClass = match($status) {
                    'approved' => 'bg-success',
                    'pending' => 'bg-warning text-dark',
                    'rejected' => 'bg-danger',
                    default => 'bg-secondary'
                };
            @endphp

            <div class="status-box d-flex align-items-center justify-content-between">
                <span>Çalışma İzni Durumu / Work Permit Status:</span>
                <span class="badge {{ $badgeClass }} px-3 py-2 fs-6">
                    {{ ucfirst($customer->work_permit_status) }}
                </span>
            </div>


            <!-- Details Table -->
            <div class="table-responsive">
                <table class="table table-bordered info-table">
                    <tbody>
                        <tr>
                            <th>Adı Soyadı (Full Name)</th>
                            <td>{{ $customer->name }}</td>
                        </tr>
                        <tr>
                            <th>Pasaport Numarası  (Passport Number)</th>
                            <td>{{ $customer->passport_number }}</td>
                        </tr>
                        <tr>
                            <th>Pasaport Bitiş Tarihi (Passport Expiry)</th>
                            <td>{{ $customer->passport_expiry_date }}</td>
                        </tr>
                        <tr>
                            <th>Uyruk  (Nationality)</th>
                            <td>{{ $customer->nationality }}</td>
                        </tr>
                        <tr>
                            <th>Doğum Tarihi (Date of Birth)</th>
                            <td>{{ $customer->dob }}</td>
                        </tr>
                        <tr>
                            <th>Vize Türü (Visa Type)</th>
                            <td>{{ $customer->visa_type }}</td>
                        </tr>
                        <tr>
                            <th>Çalışma İzni Süresi (ay) (Permit Duration)</th>
                            <td>{{ $customer->work_permit_duration }} months</td>
                        </tr>
                        <tr>
                            <th>Referans No (Reference No)</th>
                            <td>{{ $customer->reference_no }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Uploaded Documents Section -->
            <div class="mt-5">
                <h5 class="section-title">Yüklenen Belgeler / Uploaded Documents</h5>
                <div class="row">
                    @php $hasFiles = false; @endphp
                    @for($i = 1; $i <= 9; $i++)
                        @php $file = 'file'.$i; @endphp
                        @if($customer->$file)
                            @php $hasFiles = true; @endphp
                            <div class="col-md-4 mb-3">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <p class="mb-2">Document {{ $i }}</p>
                                        <a href="{{ Storage::url($customer->$file) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                            View File {{ $i }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endfor

                    @if(!$hasFiles)
                        <div class="col-12">
                            <p class="text-muted">Yüklenen belge bulunmamaktadır.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <footer>
        &copy; {{ date('Y') }} Ministry of Labor and Social Security - All Rights Reserved
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
