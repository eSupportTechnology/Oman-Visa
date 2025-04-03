
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Official Document</title>
 

<style>
    body {
        font-family: Arial, sans-serif;
        margin:20px;
    }

    
</style>


</head>
<body>
    <div class="header">
        <p>Supuru Sahibinin<br>
           Adi Soyadi: {{ $data['first_name'] }} {{ $data['last_name'] }}<br>
           Pasaport Numarası: {{ $data['passport_number'] }}<br>
           Başvuru Tarihi: {{ $data['application_date'] }}</p>
    </div>

    <h3>Hazine ve Maliye Bakanlığı Türkiye Cumhuriyeti</h3>
    <p>T.C.</p>
    <p>HAZİNE VE MALİYE BAKANLIĞI</p>

    <table style="width: 100%; border-collapse: collapse; border: 2px solid black;">
    <tr>
        <td style="padding-left: 10px; text-align: left; border-bottom: 2px solid black; border-right: none;" colspan="2">
            <p>KİMDEN TAHSİL EDİLDİĞİ</p>
        </td>
        <td style="padding: 0px; text-align: left; border-bottom: 2px solid black; border-right: none;">{{ $data['first_name'] }} {{ $data['last_name'] }}</td>
        <td style="padding: 0px; text-align: left; border-bottom: 2px solid black; line-height:0.3">
            <p>SERİ: A</p>
            <p>SAM NO: 4520132</p>
            <p>ÖZEL XY0713Z</p>
        </td>
    </tr>


    <tr>
        <td colspan="4" style="height: 50px; border-bottom: none;"></td>
    </tr>

    <tr style="font-weight: bold; border-bottom: 2px solid black; font-size: 13px;">
        <th style="padding: 8px; text-align: center; border-right: none;">TAHSİLATIN ÇEŞİDİ</th>
        <th style="padding: 8px; text-align: center; border-right: none;">YASAL DAYANAĞI</th>
        <th style="padding: 8px; text-align: center; border-right: none;">TÜRK LİRASI (TL)</th>
        <th style="padding: 8px; text-align: center;">MAHALLİ YABANCI PARA</th>
    </tr>

    <tr style="border-bottom: 2px solid black; height: 280px;">
        <td style="padding: 8px; text-align: center; vertical-align: top; border-right: none;">
            {{ $data['payment_type'] }}
        </td>
        <td style="padding: 8px; text-align: center; vertical-align: top; border-right: none;">
            {{ $data['payment_reference'] }}
        </td>
        <td style="padding: 8px; text-align: center; vertical-align: top; border-right: none;">
            {{ number_format($data['amount_turkish_lira'], 2) }}
        </td>
        <td style="padding: 8px; text-align: center; vertical-align: top;">
            {{ number_format($data['amount_foreign_currency'], 2) }} Lira
        </td>
    </tr>


    <tr style="font-weight: bold; border-bottom: 2px solid black; font-size: 16px;">
        <td colspan="3" style="border-right: none;"></td> 
        <td style="padding: 8px; text-align: right;">TOPLAM: {{ number_format($data['amount_turkish_lira'], 2) }}</td>
    </tr>
</table>

<p>Dışişleri Bakanlığı Saymanlığı, adına DÖRTBİN YIRMİDÖRT Türk Lirası karşılığı alınmıştır.</p>
    <div class="footer-text" style="line-height:0.5">
        <p>Zeyrek, Cibali, Atatürk Blv.</p>
        <p>No:17, 34083 Fatih/istanbul</p>
        <p>Türkiye</p>
    </div>
</body>
</html>