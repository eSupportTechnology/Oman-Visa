
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

    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">C No: {{ $validatedData['c_no'] }}</p>
        <p style="font-size: 14px; margin: 0;">Tarih: {{ $validatedData['date'] }}</p>
    </div>
  
    <!-- Clear Floats -->
    <div style="clear: both;"></div>

    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">POLiS TEMiZLiK SERTiFiKASI</p>
    </div>

    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">Bu, {{ $validatedData['name'] }}’in, {{ $validatedData['father_name'] }}’ın oğlu, {{ $validatedData['age'] }} yaşında, {{ $validatedData['address'] }} adresinde ikamet eden ve <br>
            {{ $validatedData['issued_date'] }}tarihinde HAYDARABAD RPO tarafından düzenlenen Hindistan {{ $validatedData['passport_no'] }}sahibi olduğunu onaylar.</p>
    </div>

    <div style="line-height: 1.5; margin-top: 30px;">
        <p style="font-size: 14px; margin: 0;">
            Kişinin, Telangana Eyaletinin {{ $validatedData['district'] }} bölgesindeki Rudrangide kalış süresi boyunca <br>
            ({{ $validatedData['start_date'] }}den {{ $validatedData['end_date'] }}'e kadar) herhangi bir olumsuz kaydına rastlanmamıştır. Bu sertifika,<br>
            seyahat kolaylıkları, özellikle Türkiye'ye Çalışma Vizesi almak amacıyla uygunluğunu doğrular.
        </p>
    </div>
    

    

    <p>Not: Bu sertifika, düzenlenme tarihinden itibaren yalnızca 6 ay boyunca geçerlidir.</p>

    <div style="line-height: 1.5; margin-top: 15px;">
        <p style="font-size: 14px; margin: 0;">---</p>
    </div>

    <p>Polis Müdürü<br>Rajanna Sircilla</p>



    <!-- Footer -->
    <div class="footer" style="text-align:left; margin-left:15px; margin-top: 20px;">
        <p><strong style="font-size:17px">Ayukat</strong><br>Avukat Mustafa<br>Keskın</p>
    </div>
    

</body>
</html>