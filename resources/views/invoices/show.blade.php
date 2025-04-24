@extends('AdminDashboard.master')

@section('content')
@php
    $details = json_decode($invoice->details, true);
    $items = [];
    $total = 0;

    foreach ($details['tanim'] as $index => $tanim) {
        $items[] = [
            'tanim' => $tanim,
            'birim_fiyat' => $details['birim_fiyat'][$index],
            'miktar' => $details['miktar'][$index],
            'toplam' => $details['toplam'][$index],
        ];
        $total += $details['toplam'][$index];
    }
@endphp

<style>
    /* Invoice box fixed A4 size */
    .invoice-box {
        width: 210mm;
        height: 297mm;
        padding: 20mm;
        margin: 20px auto;
        box-sizing: border-box;
        background: #fff;
        position: relative;
    }

    body {
        font-family: 'Arial', sans-serif;
        color: #000;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header img {
        width: 250px;
        margin-top: 100px;
    }

    .address {
        line-height: 1.4;
        font-size: 14px;
        margin-top: -20px;
    }

    .invoice-info {
        text-align: right;
        line-height: 1.2;
        font-size: 14px;
        margin-top: 100px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 40px;
        font-size: 14px;
    }

    th, td {
        padding: 14px 10px;
        text-align: left;
    }

    th {
        background-color: #e6f3ff;
    }

    tfoot th {
        font-weight: bold;
    }

    .signature {
        margin-top: 60px;
        text-align: right;
        margin-left: 10px;
    }

    .signature img {
        width: 180px;
    }

    .thanks {
        text-align: right;
        font-weight: bold;
        margin-top: 5px;
        font-size: 13px;
        letter-spacing: 5px;
    }

    /* Print Styles */
    @media print {
        body * {
            visibility: hidden;
        }
        #printableArea, #printableArea * {
            visibility: visible;
        }
        #printableArea {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }
        .no-print {
            display: none !important;
        }
    }
</style>

<div class="container mt-4">
    <!-- Control Buttons -->
    <div class="no-print mb-4">
        
        <!-- Control Buttons -->
        <div class="no-print mb-4">
            <a href="{{ route('invoices.downloadPdf', $invoice->id) }}" class="btn btn-success no-print">Download PDF</a>
            <a href="{{ route('invoices.index') }}" class="btn btn-secondary">Back to Invoices List</a>
        </div>
        
    </div>

    <!-- Only this section stays A4 size -->
    <div id="printableArea" class="invoice-box">
        <div class="header">
            <img src="{{ asset('logo1.png') }}" alt="Logo">
        </div>

        <div class="invoice-info">
            <p><strong>FATURA NO:</strong> {{ $invoice->invoice_no }}</p>
            <p>TARİH: {{ $invoice->date }}</p>
        </div>

        <div class="address">
            <strong>AVUKAT MUSTAFA KESKIN</strong><br>
            Ceviz 30 Agustas Cd. No:15 C<br>
            Blok (ofis 34846)<br>
            Maltepe/Istanbul, Türkiye<br>
            fo@mustafakeskin av. 30 542<br>
            415 67 24
        </div>

        <table>
            <thead>
                <tr>
                    <th>TANIM</th>
                    <th style="text-align:center;">BIRIM FIYAT</th>
                    <th style="text-align:center;">MIKTAR</th>
                    <th style="text-align:center;">TOPLAM</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item['tanim'] }}</td>
                        <td style="text-align:center;">{{ $item['birim_fiyat'] }}</td>
                        <td style="text-align:center;">{{ $item['miktar'] }}</td>
                        <td style="text-align:center;">{{ $item['toplam'] }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" style="background-color:#fff; text-align:right;">ARA TOPLAM</th>
                    <th style="background-color:#fff; text-align:center;">{{ $total }}</th>
                </tr>
                <tr>
                    <th colspan="3" style="background-color:#e6f3ff; text-align:right;">TOPLAM</th>
                    <th style="background-color:#e6f3ff; text-align:center;">{{ $total }}</th>
                </tr>
            </tfoot>
        </table>

        <div class="signature">
            @if ($invoice->signature && file_exists(public_path('storage/' . $invoice->signature)))
                <img src="{{ asset('storage/' . $invoice->signature) }}" alt="Signature">
            @endif
            <div class="thanks">TEŞEKKÜR EDERIM</div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('print-invoice-btn').addEventListener('click', function() {
            window.print(); // Directly trigger print
        });
    });
</script>
@endsection





