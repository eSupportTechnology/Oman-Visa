
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Passport Information</title>
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
        <img src="{{ public_path('logo5.png') }}" alt="Logo" style="height: 80px; display: inline-block; vertical-align: middle;">
        <div style="display: inline-block; vertical-align: middle; margin-left: 10px; color:#042e61">
            <p><strong>Avukat Mehmet Genç</strong></p>
            <p>Kartaltepe, Limon Çiçeği<br>
               Sk. 19/6, 34140 Bakırköy/<br>
               İstanbul, Türkiye</p>
        </div>
    </div>

        <!-- Section 1: Passport Type and Country Code -->
        <div style="line-height: 1.5; margin-top: 30px;">
            <p style="font-size: 14px; margin: 0;">Hindistan Cumhuriyeti / REPUBLIC OF INDIA</p>
            <p style="font-size: 14px; margin: 0;">Pasaport Türü / Type: P</p>
            <p style="font-size: 14px; margin: 0;">Ülke Kodu / Country Code: IND</p>
        </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <!-- Section 2: Passport Details -->
    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Pasaport Numarası / Passport No: {{ $data['passport_number'] }}</p>
        <p style="font-size: 14px; margin: 0;">Ad Soyad / Name: {{ $data['name'] }}</p>
        <p style="font-size: 14px; margin: 0;">Milliyet / Nationality: {{ $data['nationality'] }}</p>
        <p style="font-size: 14px; margin: 0;">Doğum Tarihi / Date of Birth: {{ $data['date_of_birth'] }}</p>
        <p style="font-size: 14px; margin: 0;">Cinsiyet / Gender: Erkek / Male</p>
        <p style="font-size: 14px; margin: 0;">Doğum Yeri / Place of Birth: {{ $data['place_of_birth'] }}</p>
        <p style="font-size: 14px; margin: 0;">Veriliş Yeri / Issued at: {{ $data['issuance_location'] }}</p>
        <p style="font-size: 14px; margin: 0;">Veriliş Tarihi / Date of Issue: {{ $data['issue_date'] }}</p>
        <p style="font-size: 14px; margin: 0;">Son Kullanma Tarihi / Date of Expiry: {{ $data['expiry_date'] }}</p>
    </div>

    <div style="clear: both;"></div>

    <!-- Section 4: MRZ -->
    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Makine Okunabilir Alan (MRZ):</p>
        <p style="font-size: 14px; margin: 0;">{{ $data['mrz'] }}</p>
    </div>

    <!-- Section 5: Parental Information -->
    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Baba Adı / Father's Name: {{ $data['father_name'] }}</p>
        <p style="font-size: 14px; margin: 0;">Anne Adı / Mother's Name: {{ $data['mother_name'] }}</p>
    </div>

    <!-- Section 6: Address -->
    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Adres / Address:</p>
        <p style="font-size: 14px; margin: 0;">{{ $data['address'] }}</p>
    </div>

    <!-- Section 7: Old Passport Number -->
    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Eski Pasaport Numarası / Old Passport No: {{ $data['old_passport_number'] }}</p>
    </div>

</body>
</html>