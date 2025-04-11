<div style="font-family: Arial, sans-serif; margin: 5mm;">
    @include('AdminDashboard.pdf.sections.header')

    <div style="line-height: 1.6; font-size: 14px; margin-top: 30px;">
         TAMIL NADU POLİSİ <br>
        POLİS DOĞRULAMA RAPORU
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 20px;">
         İlgili Makama 
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 20px;">
         PVR No:  {{ $data['pvr_no'] }}<br>
         Yayın Tarihi:  {{ \Carbon\Carbon::parse($data['pvr_issue_date'])->format('d-m-Y') }}
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 20px;">
        Bu belge,  {{ strtoupper($data['pvr_name']) }} 'ın şu anda aşağıdaki adreste ikamet ettiğini onaylar:<br>
         {{ $data['pvr_address'] }} 
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
        Polis departmanının mevcut kayıtlarına göre, kendisinin herhangi bir suç dosyasına karışmadığı tespit edilmiştir.
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Onaylayan Makamın Görüşleri: <br>
        {{ $data['pvr_remarks'] ?? 'YORUM YOK' }}
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Veriliş Yeri: <br>
        {{ $data['pvr_place'] }}
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Yasal Uyarı: <br>
        1. Bu rapor, Tamil Nadu Polisi'nin resmi web sitesinden (<span style="color: #003366;">www.eservices.tnpolice.gov.in</span>) alınmış orijinal, sistem tarafından oluşturulan bir rapordur ve imza gerektirmez.<br><br>
        2. Belgenin doğruluğu, barkodu tarayarak veya web sitesindeki "Doğrulama" seçeneği ile kontrol edilebilir.<br><br>
        3. Doğrulama, Tamil Nadu Polisi'nin mevcut kayıtlarına dayalı olarak yapılmıştır.
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Rapor Tarihi:  {{ \Carbon\Carbon::parse($data['pvr_report_date'])->format('d/m/Y') }}
    </div>

    @if(isset($data['signature3_path']))
    <div style="text-align: right; margin-top: 60px;">
        <img src="{{ public_path('storage/' . $data['signature3_path']) }}" alt="Noter Signature" style="height: 90px;">
    </div>
    @endif

    
</div>
