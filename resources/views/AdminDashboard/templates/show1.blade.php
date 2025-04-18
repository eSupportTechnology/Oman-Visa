
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>İş Teklifi Mektubu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20mm;
            background-color: #fefaf5;
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
    <div class="header">
        <img src="{{ public_path('logo2.png') }}" alt="Ünlü Group Logo" style="width: 100px; display: block;">
        <div style="text-align: right;">
            <div style="display: inline-block; text-align: left;">
                <p>
                    <strong>{{ $data['date'] }}</strong><br>
                    Ünlü Group<br>
                    Yenidoğan Mah. Eser Sok. No: 6-8<br>
                    Bayrampaşa, 34030<br>
                    İstanbul, Türkiye<br>
                    Phone: +90 212 576 5250<br>
                    Email: info@unlutransfer.com
                </p>
            </div>
        </div>

    </div>

    <!-- Recipient Information -->
    <h3 style="margin-bottom:35px">İş Teklifi Mektubu</h3>
    <p style="line-height:0.5; margin-bottom:0"><strong>Sayın:</strong></p>
    <p>{{ $data['name'] }}<br>{{ $data['id_number'] }}</p>

    <!-- Subject -->
    <p><strong>Konu: İş Teklifi:</strong></p>

    <p style="text-transform: capitalize;"><strong>SAYIN: gdr</strong></p>

    <!-- Introduction -->
    <p>Sizi Ünlü Group bünyesinde {{ $data['position'] }} pozisyonunda çalışmaya davet etmekten mutluluk duyarız. İş teklifimiz aşağıdaki şart ve koşulları içermektedir:</p>

    <!-- Terms and Conditions -->
    <ol>
        <li style="margin-bottom:10px">Pozisyon: {{ $data['position'] }}</li>
        <li style="margin-bottom:10px">Aylık Maaş: {{ number_format($data['salary'], 2) }} gregrTürk Lirası</li>
        <li style="margin-bottom:10px">Çalışma Saatleri: Pazartesi - Cuma, {{ $data['working_hours'] }}</li>
        <li style="margin-bottom:10px">Çalışma Yeri: {{ $data['work_location'] }}</li>
        <li style="margin-bottom:10px">Şartlar ve Koşullar:</li>
    </ol>

    <p>Çalışanın tüm hakları Türkiye İş Kanunu'na uygun olarak sağlanacaktır.</p>
    <p>Aylık maaş zamanında ödenecektir.</p>
    <p>Çalışma sırasında sağlanan ekipman ve makinelerin korunması çalışanın sorumluluğundadır.</p>
    <p>Şirket, haftalık izin ve Türkiye resmi tatilleri kapsamında dinlenme günleri sayılacaktır.</p>
    <p  style="margin-bottom:50px">Diğer tüm koşullar Türkiye İş Kanunu'na göre belirlenecektir.</p>

    <!-- Closing Paragraph -->
    <p>Sizi ekibimizde görmekten heyecan duyuyoruz ve yeteneklerinizin ve emeğinizin şirketimizin başarısına önemli katkı sağlayacağına inanıyoruz.</p>

    <!-- Footer -->
    <div class="footer" style="text-align: left;">
        <p><strong>Saygılarımızla,</strong></p>
        <p><strong>Ünlü Group<br>Genel Müdürü<br>Furkan Nihaal</strong></p>
    </div>

</body>
</html>