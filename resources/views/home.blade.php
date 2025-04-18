<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Visa Check</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


    <style>
        body, html {
            height: 100%;
        }

        .page-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        .form-box {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border: 1px solid #ccc;
        }

        .form-header {
            background-color: #d71920; /* red */
            color: white;
            padding: 10px 15px;
            font-size: 14px;
        }

        .navbar-brand h1,
        .navbar-brand p {
            margin: 0;
            font-size: 14px;
        }

        .logo {
            height: 70px;
            margin-left: 100px;
        }

        footer {
            background-color: #d71920; /* red */
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }

        .btn-custom {
            background-color: #d71920;
            color: white;
        }

        .btn-custom:hover {
            background-color: #bb181c;
            color: white;
        }

        .highlight-bar {
            background-color: #d71920;
        }

        .horizontal-scroll {
            -webkit-overflow-scrolling: touch;
            scroll-behavior: smooth;
        }


    </style>
</head>
<body>
<div class="page-wrapper">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #d71920; padding:20px 0 20px 0;">
        <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex align-items-center">
                <img src="red.png" alt="Logo" class="me-4 logo">
            </div>
            <div class="text-white text-start flex-grow-1">
                <h6 class="fw-bold">T.C. Çalışma ve Sosyal Güvenlik Bakanlığı</h6>
                <h6>Ministry of Labor and Social Security</h6>
                
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="shadow-sm border rounded">
            <div class="highlight-bar text-white p-2">
                <small>Çalışma İzni Durumu Sorgulama (Website for Work Permit Status)</small>
            </div>


            <form action="{{ route('customer.login') }}" method="POST" class="p-4">
                @csrf


                <div class="mb-3">
                    <label for="application_id" class="form-label fw-bold">Pasaport Numarası (Passport Number) </label>
                    <input type="text" class="form-control" id="application_id" name="application_id" required>
                </div>

                <div class="mb-3">
                    <label for="verification_code" class="form-label fw-bold">Şifre (Password)</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="verification_code" name="verification_code" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i class="bi bi-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>


                <div class="d-flex flex-wrap gap-2">
                    <button type="submit" class="btn btn-custom">Status Check</button>
                </div>
            </form>

            
        </div>

        <div class="container my-4">
        <div class="horizontal-scroll d-flex overflow-auto gap-5 pb-10">

            <!-- KTB -->
            <a href="https://www.ktb.gov.tr/?_Dil=2" target="_blank" class="text-center text-decoration-none">
                <div class="card border-0 shadow-sm" style="min-width: 180px;">
                    <img src="rtm.png"
                        class="card-img-top p-2" alt="KTB Logo" style="height: 80px; object-fit: contain;">
                    <div class="card-body p-2">
                        <p class="small fw-semibold mb-0">Ministry of Culture & Tourism</p>
                        <p class="small fw-semibold mb-0">Kültür ve Turizm Bakanlığı</p>
                    </div>
                </div>
            </a>

            <!-- ITO -->
            <a href="https://www.ito.org.tr/tr" target="_blank" class="text-center text-decoration-none">
                <div class="card border-0 shadow-sm" style="min-width: 180px;">
                    <img src="ito.png"
                        class="card-img-top p-2" alt="ITO Logo" style="height: 80px; object-fit: contain;">
                    <div class="card-body p-2">
                        <p class="small fw-semibold mb-0">Istanbul Chamber of Commerce</p>
                        <p class="small fw-semibold mb-0">İstanbul Ticaret Odası</p>
                    </div>
                </div>
            </a>

            <!-- MFA -->
            <a href="https://www.mfa.gov.tr/default.en.mfa" target="_blank" class="text-center text-decoration-none">
                <div class="card border-0 shadow-sm" style="min-width: 180px;">
                    <img src="mfa.png"
                        class="card-img-top p-2" alt="MFA Logo" style="height: 80px; object-fit: contain;">
                    <div class="card-body p-2">
                        <p class="small fw-semibold mb-0">Ministry of Foreign Affairs</p>
                        <p class="small fw-semibold mb-0">Dışişleri Bakanlığı</p>
                    </div>
                </div>
            </a>

            <!-- CMS Law -->
            <a href="https://cms.law/en/int/expert-guides/cms-expert-guide-to-labour-law-in-central-eastern-europe/turkiye"
            target="_blank" class="text-center text-decoration-none">
                <div class="card border-0 shadow-sm" style="min-width: 180px;">
                    <img src="cms.png"
                        class="card-img-top p-2" alt="CMS Law Logo" style="height: 80px; object-fit: contain;">
                    <div class="card-body p-2">
                        <p class="small fw-semibold mb-0">CMS Labour Law – Türkiye</p>
                        <p class="small fw-semibold mb-0">CMS İş Hukuku – Türkiye</p>
                    </div>
                </div>
            </a>

            <!-- E-Visa Russia -->
            <a href="https://evisacheck.kdmid.ru/" target="_blank" class="text-center text-decoration-none">
                <div class="card border-0 shadow-sm" style="min-width: 180px;">
                    <img src="logo.png"
                        class="card-img-top p-2" alt="Russia Visa Logo" style="height: 80px; object-fit: contain;">
                    <div class="card-body p-2">
                        <p class="small fw-semibold mb-0">Russia E-Visa Check</p>
                        <p class="small fw-semibold mb-0">Rusya E-Vize Sorgulama</p>
                    </div>
                </div>
            </a>

        </div>
    </div>



    
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function changeLanguage(language, flagPath) {
        document.getElementById('current-language').innerText = language;
        document.getElementById('current-flag').src = flagPath;
    }
</script>


<script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("verification_code");
    const eyeIcon = document.getElementById("eyeIcon");

    togglePassword.addEventListener("click", () => {
        const type = passwordInput.type === "password" ? "text" : "password";
        passwordInput.type = type;
        eyeIcon.classList.toggle("bi-eye");
        eyeIcon.classList.toggle("bi-eye-slash");
    });
</script>

</body>
</html>
