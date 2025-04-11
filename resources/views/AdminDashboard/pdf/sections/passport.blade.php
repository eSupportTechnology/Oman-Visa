<div style="font-family: Arial, sans-serif; margin: 5mm;">
    @include('AdminDashboard.pdf.sections.header')

    <div style="line-height: 1.6; font-size: 14px; margin-top: 50px;">
        Hindistan Cumhuriyeti / REPUBLIC OF INDIA<br>
        Pasaport Türü / Type:  {{ $data['type'] ?? 'P' }}<br>
        Ülke Kodu /  Country Code:  {{ $data['country_code'] ?? 'IND' }}
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Pasaport Numarası / Passport No:  {{ $data['passport_number'] }}<br>
         Ad Soyad / Name:  {{ $data['full_name'] }}<br>
         Milliyet / Nationality:  {{ $data['nationality'] }}<br>
         Doğum Tarihi / Date of Birth:  {{ \Carbon\Carbon::parse($data['dob'])->format('d/m/Y') }}<br>
         Cinsiyet / Gender:  {{ $data['gender'] }}<br>
         Doğum Yeri / Place of Birth:  {{ $data['birth_place'] }}<br>
         Veriliş Yeri / Issued at:  {{ $data['issued_at'] }}<br>
         Veriliş Tarihi / Date of Issue:  {{ \Carbon\Carbon::parse($data['issue_date'])->format('d/m/Y') }}<br>
         Son Kullanma Tarihi / Date of Expiry:  {{ \Carbon\Carbon::parse($data['expiry_date'])->format('d/m/Y') }}
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Makine Okunabilir Alan (MRZ): <br>
        {!! nl2br(e($data['mrz'])) !!}
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Baba Adı / Father’s Name:  {{ $data['father_name'] }}<br>
         Anne Adı / Mother’s Name:  {{ $data['mother_name'] }}
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Adres / Address: <br>
        {{ $data['address'] }}
    </div>

    <div style="line-height: 1.6; font-size: 14px; margin-top: 15px;">
         Eski Pasaport Numarası / Old Passport No:  {{ $data['old_passport'] }}
    </div>

    @if(isset($data['signature1_path']))
    <div style="text-align: right; margin-top: 30px;">
        <img src="{{ public_path('storage/' . $data['signature1_path']) }}" alt="Signature" style="height: 60px;">
    </div>
    @endif
</div>
