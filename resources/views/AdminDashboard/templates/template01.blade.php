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
                    <h5>Add Details for</h5>
                </div>

                <form action="{{ route('template01.generate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label">Invoice No</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="invoice_no" class="form-control" placeholder="Invoice No" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label">Date</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="date" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <table class="table table-bordered" id="invoice-table">
                                    <thead>
                                        <tr>
                                            <th>TANIM</th>
                                            <th>BIRIM FIYAT</th>
                                            <th>MIKTAR</th>
                                            <th>TOPLAM</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="invoice-row">
                                            <td><input type="text" name="tanim[]" class="form-control" required></td>
                                            <td><input type="number" name="birim_fiyat[]" class="form-control" required></td>
                                            <td><input type="number" name="miktar[]" class="form-control" required></td>
                                            <td><input type="number" name="toplam[]" class="form-control" required></td>
                                            <td><button type="button" class="remove-row btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="button" id="add-row" class="btn btn-primary mt-3">Add Row</button>
                            </div>
                        </div>



                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label">Signature</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="signature" class="form-control" accept="image/*">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Submit Button -->
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Generate Invoice</button>
                        <a href="" class="btn btn-light">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById('add-row').addEventListener('click', function() {
        // Clone the first row (with class 'invoice-row')
        var row = document.querySelector('.invoice-row');
        var newRow = row.cloneNode(true);
        
        // Clear the input fields in the cloned row
        var inputs = newRow.querySelectorAll('input');
        inputs.forEach(function(input) {
            input.value = '';
        });
        
        // Append the new row to the table
        document.querySelector('#invoice-table tbody').appendChild(newRow);
    });

    document.querySelector('#invoice-table').addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-row')) {
            var row = event.target.closest('tr');
            if (document.querySelectorAll('.invoice-row').length > 1) {
                row.remove();
            }
        }
    });
</script>
@endsection