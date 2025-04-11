@extends('AdminDashboard.master')

@section('title', 'Customers')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="container">
                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Error Message -->
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5><a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">+ Add Customer</a></h5>
                </div>

                <div class="card-body">
                    <div class="dt-ext table-responsive">
                        <table class="table table-responsive-sm" id="export-button">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Password</th>
                                    <th>Work Permit Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $index => $customer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->password }}</td>
                                    <td>
                                        @php
                                            $status = $customer->work_permit_status;
                                            $badgeClass = match($status) {
                                                'Approved' => 'bg-success',
                                                'Pending' => 'bg-warning text-dark',
                                                'Rejected' => 'bg-danger',
                                                default => 'bg-secondary'
                                            };
                                        @endphp
                                        <span class="badge {{ $badgeClass }}">{{ $status ?? 'N/A' }}</span>
                                    </td>

                                    <td>
                                        <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info btn-sm" title="View Details">
                                            <i class="icon-eye"></i> See More
                                        </a>
                                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                            <i class="icon-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" title="Delete">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        if ($.fn.DataTable.isDataTable('#export-button')) {
            $('#export-button').DataTable().destroy();
        }
        $('#export-button').DataTable({
            dom: 'Bfrtip',
            buttons: ['csv', 'excel', 'pdf', 'print']
        });
    });
</script>
@endsection
