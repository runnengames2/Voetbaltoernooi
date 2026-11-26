<?php
if(session_start() === PHP_SESSION_NONE){
session_start();
}

 include 'functions.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="icon" type="image/x-icon" href="IMG/Gouden_Voetbaltoernooi_Badge-removebg-preview.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>
<body class="login-page">
    
    <div class="card shadow-lg w-100" style="max-width: 480px;">
        <div class="card-body">
            <div class="text-center">
                <h1 class="card-title h3">Inloggen</h1>
            </div>
            <div class="mt-4">
                <form action="check.php" method="post">
                    <div class="mb-4">
                        <img src="IMG/Gouden_Voetbaltoernooi_Badge-removebg-preview.png" alt="Logo" class="img-fluid mx-auto d-block" style="max-width: 150px;">
                        <input type="text" class="form-control" id="gebruikersnaam" name="gebruikersnaam" placeholder="Gebruikersnaam" required>
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Wachtwoord" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary w-100">Inloggen</button>
                    </div>
                    <br>
                    <div class="d-grid">
                        <a href="Registreren.php" class="btn btn-dark btn-lg">
                        Aanmelden
                        </a>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>