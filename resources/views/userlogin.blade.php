<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #113b81; max-width: 100%; min-height: 8px; font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif; font-weight: 300;">
    <div class="container-fluid" style="color:#dddddd;">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="logo.png" alt="Logo" height="90" class="me-2" style="margin-left:50px;">
            <div>
                <h1 class="h5 mb-0 mt-2" id="header-title" style="font-size: 18px; margin-left:10px;">
                    Ministry of Foreign Affairs of the Russian Federation
                </h1>
                <h1 class="h5 mb-2" id="header-subtitle" style="font-size: 18px; margin-left:10px;">
                    Consular department
                </h1>
                <p style="font-size: 16px; margin-left:10px;">
                    Website for representatives of transport companies to check the validity of the e-visa for vehicle boarding only
                </p>
            </div>
        </a>

        <div class="d-flex align-items-center ms-auto">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#113b81;border-color:#113b81;">
                    <img id="current-flag" src="uk.png" alt="Language" height="20" class="me-2">
                    <span id="current-language">English</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item d-flex align-items-center" href="#" onclick="changeLanguage('English', 'uk.png', 'Ministry of Foreign Affairs of the Russian Federation', 'Consular department')">
                        <img src="uk.png" alt="English" height="20" class="me-2"> English</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Main Container (Large Box + Small Boxes in a Single Row) -->
<div class="container " style="margin-top:60px;">
    <div class="d-flex align-items-start gap-2">

        <!-- Large Box (Reduced to 15% width) -->
        <div class="shadow-sm p-4  rounded" style="border: 1px solid black; width: 65%;">
            <div class="mb-3">
                <label for="application_id" class="form-label fw-bold">User Name :</label>
            </div>

            <div class="mb-3">
                <label for="verification_code" class="form-label fw-bold">Password :</label>
            </div>

            <div class="mb-3">
                <label for="verification_code" class="form-label fw-bold">Submit :</label>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Caption :</label>
            </div>
        </div>

        <!-- Small Boxes (5 in a Row) -->
       <!-- Small Boxes (5 in a Row, Larger Size) -->
<div class="d-flex flex-column gap-3" style ="margin-left:40px;">
    <a href="https://www.ktb.gov.tr/?_Dil=2" class="shadow-sm border text-center rounded" style="width: 350px; height: 50px; background-color: #f8f9fa; line-height: 50px;">www.ktb.gov.tr</a>
    <a href="https://www.ito.org.tr/tr" class="shadow-sm border text-center rounded" style="width: 350px; height: 50px; background-color: #f8f9fa; line-height: 50px;">www.ito.org.tr</a>
    <a href="https://www.mfa.gov.tr/default.en.mfa" class="shadow-sm border text-center rounded" style="width: 350px; height: 50px; background-color: #f8f9fa; line-height: 50px;">www.mfa.gov.tr</a>
    <a href="https://cms.law/en/int/expert-guides/cms-expert-guide-to-labour-law-in-central-eastern-europe/turkiye" class="shadow-sm border text-center rounded" style="width: 350px; height: 50px; background-color: #f8f9fa; line-height: 50px;">cms.law</a>
    <a href="https://evisacheck.kdmid.ru/" class="shadow-sm border text-center rounded" style="width: 350px; height: 50px; background-color: #f8f9fa; line-height: 50px;">evisacheck.kdmid.ru</a>
</div>


    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function changeLanguage(language, flagPath, title, subtitle) {
        document.getElementById('current-language').innerText = language;
        document.getElementById('current-flag').src = flagPath;
        document.getElementById('header-title').innerText = title;
        document.getElementById('header-subtitle').innerText = subtitle;
    }
</script>

</body>
