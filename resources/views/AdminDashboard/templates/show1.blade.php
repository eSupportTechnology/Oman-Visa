<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calisma-izni-belgesi</title>

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap/css/bootstrap.min.css') }}">
<style>

    .header img {
        width: 100px; /* Logo size */
    }

    .bold-title {
        font-size: 24px;
        font-weight: bold;
        margin-top: 20px;
    }

   
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ccc; 
    }

    .custom-table th, 
    .custom-table td {
        border-bottom: 1px solid #ccc; 
        padding: 8px;
        font-size: 13px;
        line-height: 1;
    }

    .custom-table th {
        text-align: left;
    }

    .custom-table td {
        text-align: right; 
    }

    .custom-table tr:last-child td, 
    .custom-table tr:last-child th {
        border-bottom: none;
    }



    .small-text {
        font-size: 10px;
        font-weight:100;
    }
    .download-btn {
        bottom: 20px;
        margin-top:20px;
        right: 20px;
    }
</style>



</head>
<body>



<div class="document-container" id="document-container" style="
       width: 210mm;
        height: 297mm;
        margin: auto;
        padding: 30px;
        background-color: white;
        border: 2px solid black;">
        
    <!-- Header Section -->
    <div class="row">
        <div class="col-sm-8">
            <img src="{{ asset('Picture1.png') }}" alt="Turkish Logo" class="img-fluid" style="width:85%">
        </div>

        <div class="col-sm-4 text-right mt-4">
            <img src="{{ asset('barcode.png') }}" alt="Barcode" class="img-fluid" style="width:300px; height:80px">
            <p class="barcode" style="font-size: 8px;">TV-htf</p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="row">
        <p style="font-size:40px; font-weight:500; margin-left:420px; margin-top:-20px; margin-bottom:10px;">
        ht</p>
        <div class="col-sm-6">
        <table class="custom-table">
            <tr>
                <th style="font-size: 14px;">Referans No <br><span class="small-text">(Reference No)</span></th>
                <td>ht</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Adı <br><span class="small-text">(Name)</span></th>
                <td>ht</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Soyadı <br><span class="small-text">(Surname)</span></th>
                <td>ht</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Doğum Yeri <br><span class="small-text">(Place of Birth)</span></th>
                <td>ht</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Doğum Tarihi <br><span class="small-text">(Date of Birth)</span></th>
                <td>ht</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Uyruk Adı <br><span class="small-text">(Nationality)</span></th>
                <td>tyy</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Seyahat Belgesi <br><span class="small-text">(Passport)</span></th>
                <td>kuy</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Çalışma İzni <br><span class="small-text">(Work Permit)</span></th>
                <td>fes</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Belge No <br><span class="small-text">(Document Number)</span></th>
                <td>kuy</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Belge Veriliş T. <br><span class="small-text">(Date of Issue)</span></th>
                <td>kuy</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Belge Geçerlilik T <br><span class="small-text">(Expiry Date)</span></th>
                <td>uu</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Çalışma İzni <br><span class="small-text">(Work Permit)</span></th>
                <td>ew</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Ek Vize Geç. T. <br><span class="small-text">(Additional V. Expiry Date)</span></th>
                <td>hjyjy</td>
            </tr>
            <tr>
                <th style="font-size: 14px;">Ek Vize No <br><span class="small-text">(Additional Visa Number)</span></th>
                <td>rehr</td>
            </tr>
        </table>

        </div>
        <div class="col-sm-6">
            <table class="custom-table">
                 <tr>
                    <th style="font-size: 15px;">Giriş Sayısı <br><span class="small-text">Number of Entries </span></th>
                    <td>htrj</td>
                </tr>
                <tr>
                    <th style="font-size: 14px;">Geçerlilik Tarihi <br><span class="small-text">Validity Date </span></th>
                    <td>htrjt</td>
                </tr>
                <tr>
                    <th style="font-size: 14px;">Geçerlilik Bitişi <br><span class="small-text">Expiry Date</span></th>
                    <td>htrj</td>
                </tr>
                <tr>
                    <th style="font-size: 14px;">İkamet Süresi <br><span class="small-text">Duration of Stay </span></th>
                    <td>htrj</td>
                </tr>
               
            </table>
            <p style="font-size:14px" class="mt-4">Çalışma iznim geçerlidir ve destekleyici belge olarak kabul edilmelidir.</p>
                <ol style="font-size:13px; text-align:justify"> 
                    <li style="margin-bottom:13px">Geçerli bir çalışma iznim bulunmaktadır. (Schengen ülkeleri, ABD, Birleşik Krallık veya İrlanda'dan alınmış geçerli vize veya oturma izni yerine geçer.) E-vizeler destekleyici belge olarak kabul edilmemektedir.</li>
                    <li style="margin-bottom:13px">Türkiye'ye giriş yaptığında, ülkede kalacağım her gün için en az 50 ABD Doları veya eşdeğer döviz miktarına sahip olduğumu kanıtlayabilirim.</li>
                    <li style="margin-bottom:13px">Seyahat amacım çalışmak ve iş faaliyetlerinde bulunmaktır.</li>
                    <li >Sahip olduğum pasaport, bana verilecek e-Vize veya çalışma izni süresinden en az 3 ay daha uzun süre geçerlidir.</li>
                </ol>
           
        </div>
            <div class="text-right" style="margin-bottom:0px; text-align:right; margin-top:-15px;">
                <img src="{{ asset('barcode.png') }}" alt="Barcode" class="img-fluid" style="width:300px; height:80px">
            </div>
    </div>

    <!-- Disclaimer Section -->
    <div class="row">
        <div class="col-sm-12">
            <p style="font-size:11px"><strong>FERAGATNAME (DISCLAIMER)</strong></p>
            <p style="font-size:11px">Lütfen unutmayın ki işlenmiş bir çalışma izni vizesinin bilgileri değiştirilemez ve vize ücreti iade edilmez. Çalışma izni vizenizdeki bilgiler, geçerli seyahat belgenizle tamamen uyumlu olmalıdır; aksi takdirde vizeniz geçersiz sayılacaktır. Böyle bir durumda, yeni bir başvuru yapmanız gerekecektir. Pasaportunuzun refakatçi bölümünde kayıtlı kişiler sızınle seyahat ediyorsa ve Türkiye'de çalışmak istiyorlarsa, onların da ayrı bir çalışma izni vizesi alması zorunludur. Çalışma izni vizesi yalnızca iş amaçlı verilmektedir. Turistik, ticari veya diğer amaçlar için farklı bir vize gerekmektedir ve bunun için Türkiye'nin yurt dışı diplomatik misyonlarıyla iletişime geçilmelidir. Çalışma izninizin ve oturma izninizin (ikamet izni) süresinin dolup dolmadığını kontrol etmek ve zamanında yenilemek sizin sorumluluğunuzdadır.</p>
        </div>
    </div>
</div>




</body>
</html>