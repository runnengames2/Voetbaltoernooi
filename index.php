<?php
if(session_start() === PHP_SESSION_NONE){
session_start();
}

if (!isset($_SESSION['logged_in'])) {
    header("Location: inloggen.php");
    exit();
}

 include 'functions.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="icon" type="image/x-icon" href="IMG/Gouden_Voetbaltoernooi_Badge-removebg-preview.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    
<?php
toonNavbar();
?>

<hr>

<!-- Hero -->
<div class="container-fluid bg-dark text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Voetbal Toernooi 2027</h1>
        <p class="lead">Meld je team aan en volg alle wedstrijden live.</p>

        <a href="aanmelden.php" class="btn btn-success btn-lg me-2">
            Team Aanmelden
        </a>

        <a href="uitslagen.php" class="btn btn-outline-light btn-lg">
            Uitslagen
        </a>
    </div>
</div>

<!-- Functionaliteiten -->
<div class="container my-5">
    <div class="row g-4">

        <div class="col-md-3">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <h3>⚽</h3>
                    <h5 class="card-title">Teams</h5>
                    <p class="card-text">
                        Bekijk alle deelnemende teams.
                    </p>
                    <a href="teams.php" class="btn btn-primary">
                        Bekijk
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <h3>📅</h3>
                    <h5 class="card-title">Schema</h5>
                    <p class="card-text">
                        Bekijk alle wedstrijden.
                    </p>
                    <a href="kalender.php" class="btn btn-primary">
                        Bekijk
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <h3>🏆</h3>
                    <h5 class="card-title">Standen</h5>
                    <p class="card-text">
                        Bekijk de actuele ranglijst.
                    </p>
                    <a href="stand.php" class="btn btn-primary">
                        Bekijk
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <h3>📊</h3>
                    <h5 class="card-title">Uitslagen</h5>
                    <p class="card-text">
                        Bekijk alle uitslagen.
                    </p>
                    <a href="uitslagen.php" class="btn btn-primary">
                        Bekijk
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
toonFooter();
?>


</body>
</html>