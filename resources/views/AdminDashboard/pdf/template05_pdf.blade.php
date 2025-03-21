
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Caddie İş Teklifi Mektubu</title>
    <style>
           body {
            font-family: Arial, sans-serif;
            margin: 10mm;
        }
        .header {
            text-align: left;
            
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }        

    </style>
</head>
<body>
    <!-- Header -->
    <div class="header-section">
        <img src="{{ public_path('logo3.png') }}" alt="Logo" style="width: 200px;">
    </div>
    <div class="header" style="margin-top:30px">
        <p><strong>The Montgomerie Maxx Royal Golf Club</strong><br>
           PH: +90 242 710 27 00<br>
           Web sitesi: www.montgomeriemaxxroyal.com<br>
           İskele Mevki, Turizm Cd., 07506 Serik/Antalya, Türkiye</p>
        <p style="text-align: right;">{{ $data['date'] }}</p>
    </div>

    <!-- Recipient Information -->
    <p>ADI: {{ $data['name'] }},<br>PASAPORT NUMARASI : {{ $data['passport_number'] }}</p>

    <!-- Subject -->
    <p style="margin-top:15px"><strong>Konu: Caddie İş Teklifi</strong></p>

    <!-- Introduction -->
    <p><strong>SAYIN: {{ $data['name'] }},</strong></p>

    <!-- Job Conditions -->
    <p style="margin-top:15px"><strong>İŞ KOŞULLARI:</strong></p>
    <p><strong>ÇALIŞMA SAATLERİ</strong>: Haftalık maksimum 45 saat. Fazla mesai için anlaşılmış ek ödeme yapılacaktır.</p>
    <p><strong>MAAŞ</strong>: Aylık {{ number_format($data['salary'], 2) }} Türk Lirası. Maaş, her ayın sonunda ödenecektir.</p>
    <p><strong>DİNLENME GÜNLERİ</strong>: Haftada en az bir gün izin verilecek.</p>
    <p><strong>İZİN HAKKI</strong>: Yıllık 14 gün izin (ilk yılda sonra). Çalışma süresine bağlı olarak bu izin artırılabilir.</p>
    <p><strong>SAYLIK HİZMETLERİ</strong>: Şirket politikalarına uygun olarak temel sağlık hizmetleri sağlanacaktır.</p>
    <p><strong>SÖZLEŞME SÜRESİ</strong>: Performansa bağlı olarak uzatılmak üzere bir yıl olacak.</p>
    <p><strong>İHBAR SÜRESİ</strong>: İşin sonlandırılması durumunda en az iki ay önceden bildirimde bulunulması gereklidir.</p>
    <p><strong>YÜKÜMLÜLÜKLER</strong>:<br> Çalışanın, şirketin tüm politikalarına, kurallarına ve güvenlik önlemlerine uyması beklenmektedir.</p>

    <!-- Closing Paragraph -->
    <p>Sizine çalışmayı dört gözle bekliyoruz ve ekibimizin bir parçası olarak müşterilerimize en iyi hizmeti sunacağınızına inanıyoruz.</p>

    <!-- Footer -->
    <div class="footer" style="text-align:left; margin-top:25px">
        <p><strong>Saygılarımızla,</strong></p>
        <p>İK Müdürü Elnara Ozan</p>
    </div>

</body>
</html>