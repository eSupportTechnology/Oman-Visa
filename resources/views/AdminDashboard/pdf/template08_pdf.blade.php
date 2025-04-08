
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Passport Verification Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 5mm;
        }
        .header {
            text-align: left;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .signature {
            float: right;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <img src="{{ public_path('logo6.png') }}" alt="Logo" style="height: 90px; display: inline-block; vertical-align: middle;">
        <div style="display: inline-block; vertical-align: middle; margin-left: 10px; color:#83b0e8">
            <p><strong>Avukat Mustafa Keskın</strong></p>
            <p>Cevizli, 30 Ağustos Cd. No:15 C Blok (Ofis, 34846<br>
               Maltepe/Istanbul, Türkiye<br>
               info@mustafakeskin.av.tr | 90 542 415 62 24</p>
        </div>
    </div>

    <!-- Passport Information -->
    <p>Hindistan Cumhuriyeti<br>
       REPUBLIC OF INDIA</p>

    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">Pasaport No: {{ $validatedData['passport_number'] }}</p>
        <p style="font-size: 14px; margin: 0;">Adı: {{ $validatedData['name'] }}</p>
        <p style="font-size: 14px; margin: 0;">Uyruk: {{ $validatedData['nationality'] }}</p>
        <p style="font-size: 14px; margin: 0;">Cinsiyet: {{ $validatedData['gender'] }}</p>
        <p style="font-size: 14px; margin: 0;">Doğum Tarihi: {{ $validatedData['date_of_birth'] }}</p>
        <p style="font-size: 14px; margin: 0;">Doğum Yeri: {{ $validatedData['place_of_birth'] }}</p>
    </div>
  

    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">Pasaportun Verildiği Yer: {{ $validatedData['issuance_location'] }}</p>
        <p style="font-size: 14px; margin: 0;">Veriliş Tarihi: {{ $validatedData['issue_date'] }}</p>
        <p style="font-size: 14px; margin: 0;">Son Geçerlilik Tarihi: {{ $validatedData['expiry_date'] }}</p>
    </div>

    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">Makine Okunabilir Bölüm (MRZ):</p>
        <p style="font-size: 14px; margin: 0;">{{ $validatedData['mrz'] }}</p>
    </div>


    <p>Göçmenlik Kontrolü Gereklikdir<br>(EMIGRATION CHECK REQUIRED)</p>

    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">Baba / Yasal Vasi Adı: {{ $validatedData['father_name'] }}</p>
        <p style="font-size: 14px; margin: 0;">Eşin Adı: {{ $validatedData['mother_name'] }}</p>
    </div>


    <p>Adres:<br>{{ $validatedData['address'] }}</p>

    <p>Önceki Pasaport Numarası ve Verildiği Yer:<br>
       No.: {{ $validatedData['old_passport_number'] }}<br>
       Tarih: {{ $validatedData['old_issue_date'] }}<br>
       Yer: {{ $validatedData['old_issuance_location'] }}</p>

    <p style="margin-bottom:80px">Pasaport İzleme Numarası: HY3079657973316</p>

    <!-- Footer -->
    <div class="footer" style="text-align:left; margin-left:15px">
        <p><strong style="font-size:17px">Ayukat</strong><br>Avukat Mustafa<br>Keskın</p>
    </div>
    <div class="signature" style="margin-top:45px">
        @if ($signaturePath && file_exists(public_path('storage/' . $signaturePath)))
            <img src="{{ public_path('storage/' . $signaturePath) }}" alt="Signature">
        @else
            <p style="margin-top:10px"></p>
        @endif

    </div>


</body>
</html>