<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Visa Check</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
            background-color: #0771b8;
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
            margin-left:100px;
            
        }

        footer {
            background-color: #113b81;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="page-wrapper">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #113b81; padding:20px 0 20px 0;">
        <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap ">
            <div class="d-flex align-items-cente ">
                <img src="logo.png" alt="Logo" class="me-4 logo">
            </div>
            <div class="text-white text-start flex-grow-1">
                <h6 class="fw-bold">Ministry of Foreign Affairs of the Russian Federation</h6>
                <h6>Consular department</h6>
                <p class="mb-0 small fst-italic">
                    Website for representatives of transport companies to check the validity of the e-visa for vehicle boarding only
                </p>
            </div>

            
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5 ">
        <div class="shadow-sm border rounded">
            <div class="bg-primary text-white p-2">
                <small>Website for representatives of transport companies to check the validity of the e-visa for vehicle boarding only</small>
            </div>

            <form action="" method="POST" class="p-4">
                @csrf

                <div class="mb-3">
                    <label for="application_id" class="form-label fw-bold">Application ID</label>
                    <input type="text" class="form-control" id="application_id" name="application_id" required>
                </div>

                <div class="mb-3">
                    <label for="verification_code" class="form-label fw-bold">Verification Code</label>
                    <input type="text" class="form-control" id="verification_code" name="verification_code" required>
                </div>

                <div class="d-flex flex-wrap gap-2">
                    <button type="submit" class="btn text-white" style="background-color:rgb(7, 113, 184);">Status Check</button>
                    <button type="button" class="btn text-white" style="background-color:rgb(7, 113, 184);">Information</button>
                </div>
            </form>
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
</body>
</html>
