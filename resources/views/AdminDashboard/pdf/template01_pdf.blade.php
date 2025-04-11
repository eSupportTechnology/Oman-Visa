<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AVUKAT MUSTAFA KESKIN</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 40px;
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
        }

        .signature img {
            width: 150px;
        }

        .thanks {
            text-align: right;
            font-weight: bold;
            margin-top: 5px;
            font-size:13px;
            letter-spacing: 5px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <img src="{{ public_path('logo1.png') }}" alt="Logo">
    </div>

    <div class="invoice-info "  >
        <p><strong>FATURA NO:</strong> {{ $data['invoice_no'] }}</strong></p>
        <p>TARİH: {{ $data['date'] }}</p>
    </div>

    <!-- Address and Invoice Info -->
    <div class="address">
        <strong>AVUKAT MUSTAFA KESKIN</strong><br>
        Ceviz 30 Agustas Cd. No:15 C<br>
        Blok (ofis 34846)<br>
        Maltepe/Istanbul, Türkiye<br>
        fo@mustafakeskin av. 30 542<br>
        415 67 24
    </div>

    <!-- Table -->
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
                <th colspan="3" style="background-color:#fff;">ARA TOPLAM</th>
                <th style="background-color:#fff; text-align:center;">{{ $total }}</th>
            </tr>
            <tr>
                <th colspan="3" style="background-color:#e6f3ff; text-align:right;">TOPLAM</th>
                <th style="background-color:#e6f3ff; text-align:center;">{{ $total }}</th>
            </tr>
        </tfoot>
    </table>

    <!-- Signature -->
    <div class="signature">
        @if ($signaturePath && file_exists(public_path('storage/' . $signaturePath)))
            <img src="{{ public_path('storage/' . $signaturePath) }}" alt="Signature">
        @endif
        <div class="thanks">TEŞEKKÜR EDERIM</div>
    </div>

</body>
</html>
