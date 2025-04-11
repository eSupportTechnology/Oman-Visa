<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Çalışma İzni Belgesi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 30px;
        }

        .wrapper {
            width: 210mm;
            height: 297mm;
            border: 2px solid black;
            margin: auto;
            padding: 25px;
            box-sizing: border-box;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .logo img {
            width: 160px;
        }

        .barcode img {
            height: 60px;
        }

        .barcode p {
            font-size: 10px;
            font-weight: bold;
        }

        h1 {
            font-size: 22px;
            font-weight: bold;
            margin: 10px 0 0;
        }

        h2 {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-top: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
            margin-bottom: 20px;
        }

        th, td {
            text-align: left;
            vertical-align: top;
            padding: 5px 8px;
            border: 1px solid #000;
        }

        .two-col {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .col {
            flex: 1;
        }

        .notes {
            font-size: 12px;
            margin-top: 10px;
        }

        .disclaimer {
            font-size: 10px;
            margin-top: 25px;
            text-align: justify;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="logo">
            <p class="bold">T.C.Çalışma ve Sosyal<br>Güvenlik Bakanlığı</p>
            <p style="font-size: 11px;">Ministry of Labor and Social Security</p>
        </div>
        <div class="barcode">
            <img src="{{ public_path('barcode.png') }}" alt="Barcode">
            <p>TV-{{ $data['reference_no'] }}</p>
        </div>
    </div>

    <h2>{{ strtoupper($data['work_permit_type']) }}</h2>

    <div class="two-col">
        <!-- LEFT -->
        <div class="col">
            <table>
                <tr><th>Referans No<br><small>(Reference No)</small></th><td>{{ $data['reference_no'] }}</td></tr>
                <tr><th>Adı<br><small>(Name)</small></th><td>{{ $data['first_name'] }}</td></tr>
                <tr><th>Soyadı<br><small>(Surname)</small></th><td>{{ $data['last_name'] }}</td></tr>
                <tr><th>Doğum Yeri<br><small>(Place of Birth)</small></th><td>{{ $data['place_of_birth'] }}</td></tr>
                <tr><th>Doğum Tarihi<br><small>(Date of Birth)</small></th><td>{{ \Carbon\Carbon::parse($data['date_of_birth'])->format('d/m/Y') }}</td></tr>
                <tr><th>Uyruk Adı<br><small>(Nationality)</small></th><td>{{ $data['nationality'] }}</td></tr>
                <tr><th>Seyahat Belgesi<br><small>(Passport)</small></th><td>{{ $data['passport_number'] }}</td></tr>
                <tr><th>Çalışma İzni<br><small>(Work Permit)</small></th><td>{{ $data['work_permit_type'] }}</td></tr>
                <tr><th>Belge No<br><small>(Document Number)</small></th><td>{{ $data['reference_no'] }}</td></tr>
                <tr><th>Belge Veriliş T<br><small>(Date of Issue)</small></th><td>{{ \Carbon\Carbon::parse($data['passport_issue_date'])->format('d/m/Y') }}</td></tr>
                <tr><th>Belge Geçerlilik T<br><small>(Expiry Date)</small></th><td>{{ \Carbon\Carbon::parse($data['passport_expiry_date'])->format('d/m/Y') }}</td></tr>
                <tr><th>Ek Vize Geç. T<br><small>(Additional V. Expiry Date)</small></th><td>{{ $data['work_permit_validity_end'] ?? 'N/A' }}</td></tr>
                <tr><th>Ek Vize No<br><small>(Additional Visa Number)</small></th><td>{{ $data['additional_visa_info'] ?? 'N/A' }}</td></tr>
            </table>
        </div>

        <!-- RIGHT -->
        <div class="col">
            <table>
                <tr><th>Giriş Sayısı<br><small>Number of Entries</small></th><td>{{ $data['number_of_entries'] == 1 ? 'Tek Giriş' : 'Çoklu Giriş' }}</td></tr>
                <tr><th>Geçerlilik Tarihi<br><small>Validity Date</small></th><td>{{ \Carbon\Carbon::parse($data['validity_date'])->format('d M Y') }}</td></tr>
                <tr><th>Geçerlilik Bitişi<br><small>Expiry Date</small></th><td>{{ \Carbon\Carbon::parse($data['expiry_date'])->format('d M Y') }}</td></tr>
                <tr><th>İkamet Süresi<br><small>Duration of Stay</small></th><td>{{ $data['residence_duration'] }} Yıl</td></tr>
            </table>

            <div class="notes">
                <p><strong>Çalışma İznim Geçerlidir ve Destekleyici Belge Olarak Kabul Edilmelidir.</strong></p>
                <ol>
                    <li>Geçerli bir çalışma iznim bulunmaktadır. (E-vizeler kabul edilmez.)</li>
                    <li>Her gün için en az 50 USD karşılığı param bulunmaktadır.</li>
                    <li>Seyahat amacım çalışmak ve iş faaliyetlerinde bulunmaktır.</li>
                    <li>Pasaport süresi, izinden en az 3 ay daha fazladır.</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Disclaimer -->
    <div class="disclaimer">
        <strong>FERAGATNAME (DISCLAIMER)</strong><br>
        Lütfen unutmayın ki işlenmiş bir çalışma izni vizesinin bilgileri değiştirilemez ve ücret iade edilmez. Bilgiler geçerli seyahat belgenizle birebir uyumlu olmalıdır. Refakatçiler için ayrı vize alınmalıdır. İkamet ve vize süresini takip etmek sizin sorumluluğunuzdadır.
    </div>
</div>
</body>
</html>
