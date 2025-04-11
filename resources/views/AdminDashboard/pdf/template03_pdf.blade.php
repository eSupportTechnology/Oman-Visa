<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
            color: #000;
            margin: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

        .box {
            border: 1px solid #000;
            margin-top: 20px;
        }
        .box-header {
            padding: 10px;
            border-bottom: 1px solid #000;
            font-weight: bold;
        }
        .info-row td {
            padding: 6px 10px;
            vertical-align: top;
        }
        .stamp {
            font-size: 13px;
            color: darkred;
            font-weight: bold;
            transform: rotate(-10deg);
            position: absolute;
            right: 40px;
            bottom: 300px;
            
        }
        .total {
            font-weight: bold;
            font-size: 16px;
            text-align: right;
            padding: 10px 0;
        }
        .footer {
            font-size: 13px;
            margin-top: 20px;
        }
        .signature {
            margin-top: 30px;
            text-align: right;
        }
        .signature img {
            height: 60px;
        }
    </style>
</head>
<body>

<div class="header" style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px; padding-bottom: 10px; ">
    <!-- Applicant Info -->
    <div style="font-size: 14px; line-height: 1.7;">
        <strong>Supuru Sahibinin</strong><br>
        Adı Soyadı: {{ $data['name'] }}<br>
        Pasaport Numarası: {{ $data['passport_number'] }}<br>
        Başvuru Tarihi: {{ \Carbon\Carbon::parse($data['application_date'])->translatedFormat('d F Y') }}
    </div>

    <!-- Logo -->
    <div style="text-align: right; margin-Top:-10%;">
        <img src="{{ public_path('frontend/assets/images/Picture1.png') }}" alt="Turkish Logo" style="width: 300px; height: auto; margin-top:-25px;">
    </div>
</div>



    <div style="text-align:left; font-weight:bold; margin-top:10%; line-height: 1.8;">
        <span style="font-size: 15px;">Hazine ve Maliye Bakanlığı Türkiye Cumhuriyeti</span><br>
        <span style="font-size: 13px;">T.C.</span><br>
        <span style="font-size: 14px;">HAZİNE VE MALİYE BAKANLIĞI</span>
    </div>


    <div class="box">
        <table>
            <tr class="box-header">
                <td style="width: 33%; text-align: left; font-weight: bold; padding-left:5px; padding-top:10px;">KİMDEN TAHSİL EDİLDİĞİ</td>
                <td style="width: 34%; text-align: center; font-weight: bold; padding-top:10px;">{{ strtoupper($data['name']) }}</td>
                <td style="width: 33%; text-align: right; padding-right:5px; padding-top:10px;">
                    SERİ: A<br>
                    SAM NO: {{ $data['sam_no'] }}<br>
                    ÖZEL NO: {{ $data['ozel_no'] }}
                </td>
            </tr>
        </table>

        <table style="margin-top: 30px; border-collapse: collapse; border-bottom: 1px solid black;">
            <thead>
                <tr>
                    <th style="padding: 5px;">TAHSİLATIN ÇEŞİDİ</th>
                    <th style="padding: 5px;">YASAL DAYANAĞI</th>
                    <th style="padding: 5px;">TÜRK LİRASI (TL)</th>
                    <th style="padding: 5px;">MAHALLİ YABANCI PARA</th>
                </tr>
            </thead>
        </table>
        <table>
            <tr>
                <td style="padding-left: 40px; font-size: 12px; white-space: nowrap;">Ödeme Türü</td>
                <td style="padding-left: 70px; font-size: 12px; white-space: nowrap;">Ödeme Referansı</td>
                <td style="padding-left: 40px; font-size: 12px; white-space: nowrap;">Türk Lirası miktarı</td>
                <td style="padding: 6px 10px 0px 40px; font-size: 12px;">Yabancı veya yerel para birimi cinsinden tutar</td>
            </tr>


            <tr>
                <td> </td>
                <td style="padding: 20px 0px 300px 90px; font-size: 12px; white-space: nowrap;">{{ strtoupper($data['reference_number']) }}</td>
                <td></td>
                <td style="padding: 20px 0px 300px 80px; font-size: 12px; white-space: nowrap;">{{ number_format(4024, 2, ',', '.') }} Lira</td>
            </tr>

            
        </table>

        <div class="stamp">
            Alındı Mührü&nbsp;&nbsp;{{ \Carbon\Carbon::parse($data['application_date'])->format('d F Y') }}<br>
            <span style="font-size: 10px; font-weight: normal;">
                Çalışma ve Sosyal Güvenlik Bakanlığı İstanbul Bölge<br>
                Zeyrek, Cibali, Atatürk Blv. No:17, 34083 Fatih/İstanbul, Türkiye
            </span>
        </div>

        <table style=" border-collapse: collapse; border: 1px solid black;">
            <tr>
                <td style="padding-left: 40px; font-size: 12px; white-space: nowrap;"></td>
                <td style="padding-left: 70px; font-size: 12px; white-space: nowrap;"></td>
                <td style="padding-left: 40px; font-size: 12px; white-space: nowrap;"></td>
                <td style="padding: 6px 10px 0px 40px; font-weight: bold; font-size: 16px; text-align: right; padding: 10px 5px 10px 0;"><strong>TOPLAM:&nbsp;&nbsp;{{ number_format(4024, 2, ',', '.') }}</strong></td>
            </tr>

        </table>

        
    </div>
            
    

    <div class="footer" style="font-size: 13px; margin-top: 20px; line-height: 1.5;">
        <span style=" font-size: 14px; display: block; margin-bottom: 10px;">
            Dışişleri Bakanlığı Saymanlığı, adına DÖRTBİN YİRMİDÖRT Türk Lirası karşılığı alınmıştır.
        </span>
        Zeyrek, Cibali, Atatürk Blv. <br>
        No:17, 34083 Fatih/İstanbul, <br>
        Türkiye
    </div>


    @if(isset($data['signature_path']))
    <div class="signature">
        <img src="{{ public_path('storage/' . $data['signature_path']) }}" alt="Signature">
    </div>
    @endif

</body>
</html>
