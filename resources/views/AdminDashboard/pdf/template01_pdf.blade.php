<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AVUKAT MUSTAFA KESKIN</title>
    <style>
        body {
            font-family: sans-serif, Helvetica;
        }
        .header {
            display: flex;
            align-items: center;
        }
        .header img {
            width: 100px;
            height: auto;
        }
        .header h1 {
            margin-left: 20px;
        }
        .container {
            margin: auto;
            padding: 40px;
            background-color: white;
        }
        .address-invoice {
            display: flex;
            justify-content: space-between;
            margin-top: 70px;
        }
        .address {
            line-height: 0.5;  
        }
        .invoice-details {
            text-align: right;
            line-height: 0.5; 
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: none;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f0f8ff;
        }
        .signature {
            margin-top: 20px;
            text-align: right;
        }
        .signature img {
            width: 150px;
            height: auto;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header" style="margin-top:40px">
        <img src="{{ public_path('logo1.png') }}" alt="Logo" style="width:350px">
        </div>

        <div class="address-invoice" style=" display: flex;
            justify-content: space-between;">
            <div class="address">
                <p><strong>AVUKAT MUSTAFA KESKIN</strong></p>
                <p>Ceviz 30 Agustas Cd. No:15 C</p>
                <p>Blok (ofis 34846)</p>
                <p>Maltepe/Istanbul, Türkiye</p>
                <p>fo@mustafakeskin av. 30 542</p>
                <p>415 67 24</p>
            </div>
            <div class="invoice-details">
                <p><strong>Fatura No: {{ $data['invoice_no'] }}</strong></p>
                <p>Tarih: {{ $data['date'] }}</p>
            </div>
        </div>

        <table style="margin-top:50px">
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
                    <th colspan="3" style="background-color:#fff;">ARA TOPLAM</th>
                    <th style="background-color:#fff;text-align:center;">{{ $total }}</th>
                </tr>
                <tr>
                    <th colspan="3" style="text-align:right; padding-right:50px">TOPLAM</th>
                    <th style="text-align:center;">{{ $total }}</th>
                </tr>
            </tfoot>
        </table>

        <div class="signature" style="margin-top:45px">
        @if ($signaturePath && file_exists(public_path('storage/' . $signaturePath)))
            <img src="{{ public_path('storage/' . $signaturePath) }}" alt="Signature">
        @else
            <p style="margin-top:10px"></p>
        @endif

            <p>Teşekkür Ederim</p>
        </div>
    </div>

</body>
</html>
