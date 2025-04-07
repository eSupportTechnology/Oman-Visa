
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
    <img src="{{ public_path('logo3.png') }}" alt="Logo" style="height: 90px; display: inline-block; vertical-align: middle;">
    <div class="header">
        <div style="display: inline-block; vertical-align: middle; margin-left: 10px; color:#000000">
            <p><strong>The Montgomeria Maxx Royal Golf Club</strong></p>
            <p>PH: +90 242 710 27 00<br>
               Web sitesi: www.montgomeriemaxxroyal.com/<br>
               isekele Mevikii, Turizm Cd., 07506 Serik/Antalya,TÜrkiye</p>
        </div>

    </div>
    <div style="display: inline-block; float: right; margin-right: 10px; color:#000000">
        <p><strong>{{ $validatedData['date'] }}</strong></p>
    </div>
    
    <div style="display: inline-block; vertical-align: middle; margin-left: 10px; color:#000000">
        <p>ADi:{{ $validatedData['name'] }} <br>
          PASSPORT NUMARASI:{{ $validatedData['passport_no'] }}<br>
         
    </div>

    <div class="container">
        
        <p class="bold"><strong>Caddie İş Teklifi</strong></p><br>
        <p class="bold"><strong>SAYIN: {{ $validatedData['name'] }},</strong></p><br><br>
        <p class="bold"><strong>İŞ Koşulları:</strong></p><br>
        <p><span class="bold">ÇALIŞMA SAATLERİ:</span> Haftalık maksimum {{ $validatedData['hours'] }} saat. Fazla mesai için anlaşmalı ek ödeme yapılacaktır.</p>
        <p><span class="bold">MAAŞ:</span> Aylık {{ $validatedData['salary'] }}Türk Lirası. Maaş, her ayın sonunda ödenecektir.</p>
        <p><span class="bold">DİNLENME GÜNLERİ:</span> Haftada en az bir gün izin verilecektir.</p>
        <p><span class="bold">İZİN HAKKI:</span> Yıllık {{ $validatedData['days'] }} gün izin (ilk yıldan sonra). Çalışma süresine bağlı olarak bu izin artırılabilir.</p>
        <p><span class="bold">SAĞLIK HİZMETLERİ:</span> Şirket politikalarına uygun olarak temel sağlık hizmetleri sağlanacaktır.</p>
        <p><span class="bold">SÖZLEŞME SÜRESİ:</span> Performansa bağlı olarak uzatılmak üzere bir yıl olacaktır.</p>
        <p><span class="bold">İHBAR SÜRESİ:</span> İşin sonlandırılması durumunda en az iki ay önceden bildirimde bulunulması gereklidir.</p>
        <p><span class="bold">YÜKÜMLÜLÜKLER:</span> Çalışanın, şirketin tüm politikalarına, kurallarına ve güvenlik önlemlerine uyması beklenmektedir.</p> 
        <p>Sizinle çalışmayı dört gözle bekliyoruz ve ekibimizin bir parçası olarak müşterilerimize en iyi hizmeti sunacağınıza inanıyoruz.</p>
    </div>

    <!-- Footer -->
    <div class="footer" style="text-align:left; margin-left:15px">
        <p><strong style="font-size:17px">Ayukat</strong><br>Avukat Mustafa<br>Keskın</p>
    </div>
    
    <img src="{{ public_path('logo7.png') }}" alt="Logo" style="width: 100%; height: 90px;  display: block;display: inline-block; vertical-align: middle;">
</body>
</html>