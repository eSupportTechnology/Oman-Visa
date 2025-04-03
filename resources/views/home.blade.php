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

        <div class="d-flex align-items-center ms-auto" >
            
            <div class="dropdown" >
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


<div class="container "  style="margin-top:40px;">
<div class=" shadow-sm p-4 " style="border: 1px solid black;">

        
            <div class=" text-white  p-2  " style="margin-top:-24px;width:1295px;margin-left:-24px;background-color:rgb(7, 113, 184);border-bottom: 1px solid black;">
              <span style="margin-left:10px;font-size:15px; font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif; font-weight: 300;">  Website for representatives of transport companies to check the validity of the e-visa for vehicle boarding only</span>
            </div>

        
            <form action="" method="POST" class="p-4"  >
                @csrf

                <div class="mb-3">
                    <label for="application_id" class="form-label" style="font-weight:bold;">Application ID</label>
                    <input type="text" class="form-control" id="application_id" name="application_id"  required style="width:50%">
                </div>

                
                <div class="mb-3">
                    <label for="verification_code" class="form-label" style="font-weight:bold;">Verification Code</label>
                    <input type="text" class="form-control" id="verification_code" name="verification_code"  required style="width:50%">
                </div>

        
                <div class="d-flex">
                    <button type="submit" class="btn  me-2 text-white" style="background-color:rgb(7, 113, 184);">Status Check</button>
                    <button type="button" class="btn  text-white" style="background-color:rgb(7, 113, 184);">Information</button>
                </div>
            </form>
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
<!-- 
<footer class="text-center text-white mt-4 py-2" style="background-color: #113b81;">
        © Consular department of MFA of Russia, 2025
    </footer>-->
</body>