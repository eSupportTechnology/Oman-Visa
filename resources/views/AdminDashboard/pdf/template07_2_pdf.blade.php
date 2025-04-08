
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Police report</title>
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
            <p style="font-size: 14px; margin: 0;">TAMIL NADU POLiSi</p>
            <p style="font-size: 14px; margin: 0;">POLIS DOĞRULAMA RAPORU</p>
        </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <!-- Section 1: Passport Type and Country Code -->
        <div style="line-height: 1.5; margin-top: 30px;">
            <p style="font-size: 14px; margin: 0;">ilgili Makama</p>
        </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>


    <!-- Section 2: EnrollmentDetails -->
    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">PVR No: {{ $validatedData['pvr_no'] }}</p>
        <p style="font-size: 14px; margin: 0;">Yayin Tarihi:{{ $validatedData['publication_date'] }}</p>
    <div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>


    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">{{ $validatedData['address'] }}</p>
    </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Polis departmaninin mevcut kayitlarina göre, kendisnin herhangi bir suç dosyasina karişmadiği tespit edilmiştir</p>
    </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Onaylayan Makamin Görüşleri:</p>
        <p style="font-size: 14px; margin: 0;">{{$validatedData['approval']  }}</p>
    </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Veriliş Yeri:</p>
        <p style="font-size: 14px; margin: 0;">{{$validatedData['Issuance']  }}</p>
    </div>


    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Yasal Uyari:</p>
        <p style="font-size: 14px; margin: 0;">{{ $validatedData['legal_notice'] }}</p>
    </div>

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">Rapor Tarihi: {{ now()->format('d/m/Y') }}</p>

    </div>




</body>
</html>