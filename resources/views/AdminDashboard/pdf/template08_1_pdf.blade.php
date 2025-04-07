
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
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
        <img src="{{ public_path('logo6.png') }}" alt="Logo" style="height: 90px; display: inline-block; vertical-align: middle;">
        <div style="display: inline-block; vertical-align: middle; margin-left: 10px; color:#83b0e8">
            <p><strong>Avukat Mustafa Keskın</strong></p>
            <p>Cevizli, 30 Ağustos Cd. No:15 C Blok (Ofis, 34846<br>
               Maltepe/Istanbul, Türkiye<br>
               info@mustafakeskin.av.tr | 90 542 415 62 24</p>
        </div>
    </div>

    <!-- Passport Information -->
    <p>Hindistan hükümeti<br>
       Government of India</p>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <p>Hindistan Benzersiz kimlik Yetkilisi</p>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">Unique Identification Authority of India</p>
    </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>


    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">---</p>
    </div>


    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">85/Kayit No: {{ $validatedData['recode_no'] }}</p>
        <p style="font-size: 14px; margin: 0;">Enrolment No: {{ $validatedData['enrolment_no'] }}</p>
    </div>
  
    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">Kime: </p>
        <p style="font-size: 14px; margin: 0;">{{ $validatedData['reciver'] }}</p>
        <p style="font-size: 14px; margin: 0;">Baba Adi: {{ $validatedData['father_name'] }}</p>
        <p style="font-size: 14px; margin: 0;">Ev No.: {{ $validatedData['ev_no'] }}</p>
        <p style="font-size: 14px; margin: 0;">Bölge: {{ $validatedData['region'] }}</p>
        <p style="font-size: 14px; margin: 0;">Köy/şehir: {{ $validatedData['city'] }}</p>
        <p style="font-size: 14px; margin: 0;">liçe: {{ $validatedData['district'] }}</p>
        <p style="font-size: 14px; margin: 0;">Eyalet: {{ $validatedData['state'] }}</p>
        <p style="font-size: 14px; margin: 0;">Posta Kodu: {{ $validatedData['zip_code'] }}</p>
        <p style="font-size: 14px; margin: 0;">Telefon: {{ $validatedData['phone_number'] }}</p>
    </div>

    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">Aadhaar No.:{{$validatedData['aadhar_no']   }}</p>
        <p style="font-size: 14px; margin: 0;">VID:{{$validatedData['vid_no']   }}</p>
    </div>

    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">Doğum Tarihi(DOB):{{$validatedData['dob']   }}</p>
        <p style="font-size: 14px; margin: 0;">Cinsiyet (Gender):{{$validatedData['gender']   }}</p>
    </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>


    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">---</p>
    </div>


    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">Benim Aadhaarim,benim kimliğim</p>
        <p style="font-size: 14px; margin: 0;">Aadhaar,kimlik kanitidir,vatandaşlik veya doğum tarihi kaniti değilidir.Doğrulama ile Kullanilmalidir<br>(çevrimiçi kimlik doğrulama veya QR kodu tarama/ çevrimdişi XML)</p>
    </div>


    <p>{{$validatedData['aadhar_no']   }}</p>

    <!-- Footer -->
    <div class="footer" style="text-align:left; margin-left:15px; margin-top: 20px;">
        <p><strong style="font-size:17px">Ayukat</strong><br>Avukat Mustafa<br>Keskın</p>
    </div>
    

</body>
</html>