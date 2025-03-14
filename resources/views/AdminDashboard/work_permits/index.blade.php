@extends('AdminDashboard.master')

@section('title', 'Work Permits')

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
                    <h5><a href="{{ route('work_permits.create') }}" class="btn btn-primary mb-3">+ Add Work Permit</a></h5>
                </div>

                <div class="card-body">
                    <div class="dt-ext table-responsive">
                        <table class="table table-responsive-sm" id="export-button">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Reference No</th>
                                    <th>Name</th>
                                    <th>Passport No</th>
                                    <th>Work Permit Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($workPermits as $index => $permit)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $permit->reference_no }}</td>
                                    <td>{{ $permit->first_name }} {{ $permit->last_name }}</td>
                                    <td>{{ $permit->passport_number }}</td>
                                    <td>{{ $permit->work_permit_type }}</td>
                                    <td>
                                        <a href="{{ route('work_permits.show', $permit->id) }}" class="btn btn-info btn-sm" title="View Details">
                                            <i class="icon-eye"></i>
                                        </a>
                                        <a href="{{ route('work_permits.edit', $permit->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                            <i class="icon-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('work_permits.destroy', $permit->id) }}" method="POST" style="display:inline;">
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
                    </div> <!-- End Table -->
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
