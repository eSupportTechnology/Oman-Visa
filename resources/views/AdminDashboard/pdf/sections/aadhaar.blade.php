<div style="font-family: Arial, sans-serif; margin: 5mm;">
    @include('AdminDashboard.pdf.sections.header')

    <div style="line-height: 1.6; font-size: 14px; margin-top: 20px;">
         Hindistan Benzersiz Kimlik Kurumu <br>
        Unique Identification Authority of India<br>
        Hindistan Hükümeti<br>
        Government of India
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 20px;">
         Kayıt Numarası / Enrollment No.:  {{ $data['aadhaar_enroll_no'] }}
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Alıcı / To: <br>
        {{ $data['aadhaar_recipient'] }}<br>
        C/O: {{ $data['aadhaar_care_of'] }}
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Adres / Address: <br>
        {!! nl2br(e($data['aadhaar_address'])) !!}
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Telefon Numarası / Mobile:  {{ $data['aadhaar_mobile'] }}<br>
         Aadhaar Numarası / Your Aadhaar No.:  {{ $data['aadhaar_number'] }}
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Aadhaar - Kimliğim, Güvencem <br>
        My Aadhaar, My Identity
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Hindistan Hükümeti / Government of India 
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Ad Soyad / Name:  {{ $data['aadhaar_full_name'] }}<br>
         Doğum Tarihi / DOB:  {{ \Carbon\Carbon::parse($data['aadhaar_dob'])->format('d/m/Y') }}<br>
         Cinsiyet / Gender:  {{ $data['aadhaar_gender'] }}<br>
         Aadhaar Numarası / Aadhaar No.:  {{ $data['aadhaar_number'] }}
    </div>

    @if(isset($data['signature2_path']))
    <div style="text-align: right; margin-top: 40px;">
        <img src="{{ public_path('storage/' . $data['signature2_path']) }}" alt="Signature" style="height: 60px;">
    </div>
    @endif
</div>
