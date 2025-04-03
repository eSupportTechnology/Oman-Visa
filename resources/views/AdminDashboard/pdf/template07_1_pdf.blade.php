
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enrollment</title>
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
            margin-top: auto;
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
            <p style="font-size: 14px; margin: 0;">Hindistan Benzerisiz Kimlik Kurumu </p>
            <p style="font-size: 14px; margin: 0;">Unique Identifiacation Authority Of India </p>
            <p style="font-size: 14px; margin: 0;">Hindistan Hükümeti</p>
            <p style="font-size: 14px; margin: 0;">Government of India/p>
        </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <!-- Section 2: EnrollmentDetails -->
    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Kayit Numarasi / Enrollment No.: {{ $validatedData['enrollment_number'] }}</p>
    <d/iv>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>


    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Alici / To: </p>
        <p style="font-size: 14px; margin: 0;"> {{ $validatedData['first_name'] }} &nbsp {{$validatedData['last_name'] }}</p>
        <p style="font-size: 14px; margin: 0;">C/O:{{$validatedData['last_name'] }}</p>
    </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Adres / Address:</p>
        <p style="font-size: 14px; margin: 0;">{{$validatedData['address']  }}</p>
    </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Telefon Numarasi / Mobile : {{$validatedData['mobile_no']  }}</p>
        <p style="font-size: 14px; margin: 0;">Aadhaar Numarasi / Your Aadhaar No.: {{$validatedData['aadhaar_no']  }}</p>
    </div>


    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Aadhaara - Kimliğim, Güvencem</p>
        <p style="font-size: 14px; margin: 0;">My Aadaar,My identity</p>
    </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Hindistan Hükümeti /Government of India</p>
    </div>

    <!-- Section 4: MRZ -->
    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Ad Soyad / Name:{{ $validatedData['first_name'] }} &nbsp {{$validatedData['last_name'] }}</p>
        <p style="font-size: 14px; margin: 0;">Doğum Tarihi / DOB:{{$validatedData['dob']  }}</p>
        <p style="font-size: 14px; margin: 0;">Cinsiyet / Gender : {{$validatedData['gender']  }}</p>
        <p style="font-size: 14px; margin: 0;">Aadhaar Numarasi / Aadhaar No.:{{$validatedData['aadhaar_no']  }}</p>
    </div>



</body>
</html>