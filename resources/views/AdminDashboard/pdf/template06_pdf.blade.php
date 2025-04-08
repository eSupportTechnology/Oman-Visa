
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>İş Teklifi Mektubu</title>
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
        .terms {
            text-align: justify;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header-section">
        <img src="{{ public_path('logo4.png') }}" alt="Logo" style="width: 100px;">
    </div>
    <div class="header">
        <p><strong>Kılıç Deniz</strong></p>
        <p>Adres: Kemikler köyü mevkii, Milas-Bodrum karayolu 18 km, Milas<br>
           Telefon: +90 252 559 02 83<br>
           E-posta: info@kilicdeniz.com.tr<br>
           Web sitesi: www.kilicdeniz.com.tr</p>
        <p style="text-align: right;">TARIH<br>{{ $data['date'] }}</p>
    </div>

    <!-- Recipient Information -->
    <p><strong>SAYIN:</strong><br>{{ $data['name'] }},<br>Pasaport No: {{ $data['passport_number'] }}</p>

    <!-- Subject -->
    <p><strong>Konu: İş Teklifi - "{{ $data['position'] }}" Pozisyonu</strong></p>

    <p><strong>SAYIN:{{ $data['name'] }} </strong></p>

    <!-- Introduction -->
    <p>Kılıç Deniz'de "{{ $data['position'] }}" pozisyonuna seçildiğinizin bildirmenizin mutluluğunu yaşıyoruz. Çalışkanlığınız ve yeteneklerinizin tanınması sonucu, şirketimiz hizmetlerini almayla kararlaştırmıştır.</p>

    <!-- Job Conditions -->
    <div style="line-height: 1.0; margin-top: 10px;">
        <p><strong>İşin Şart ve Koşulları:</strong></p>
        <div>
            <p>Pozisyon: "{{ $data['position'] }}"</p>
            <p>Maaş: Aylık {{ number_format($data['salary'], 2) }} TL</p>
            <p>Çalışma Saatleri: Sabah 8:30'dan akşam 5:30'a kadar</p>
            <p>İş Yeri: {{ $data['work_location'] }}</p>
            <p>Sözleşme Süresi: Sözleşme süresi bir yıl olup, performansına bağlı olarak uzatılabilir.</p>
        </div>
    </div>

    <!-- Other Benefits -->
    <div style="line-height: 1.0; margin-top: 10px;">
        <p><strong>Diğer Haklar:</strong></p>
        <div>
            <p>Sağlık sigortası şirket tarafından sağlanacaktır.</p>
            <p>Türkiye İş Kanunu kapsamında belirlenen tüm kurallar ve yönetmeliklere uyulacaktır.</p>
            <p>Şirket politikalarına uygun olarak konaklama ve yemek imkanı sağlanacaktır (uygulanabilir ise).</p>
            <p>Haftalık izinler ve diğer tatiller Türkiye yasalarına uygun olarak verilecektir.</p>
            <p>Özel Şart: Bir yıllık süre dolmadan iş bırakmanız veya iş değiştirmeniz durumunda çalışma izniniz iptal edilecektir.</p>
            <p>Genel Şart: Şirketin tüm kuralları ve politikaları sizin için geçerli olacaktır.</p>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer" style="text-align:left">
        <p><strong>Saygılarımızla,</strong></p>
        <p><strong>İK Müdürü<br>Kılıç Deniz</strong></p>
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