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
<div class="container">
    <h1>Categorieën</h1>
</div>
<br>
<div class="row">
    <div class="col-md-6 mb-3">
        <div class="card h-100">
            <div class="card-body text-center">
                <p class="card-text">Leeftijd 14 - 17</p>
                <img src="IMG/Gouden_Voetbaltoernooi_Badge-removebg-preview.png"
                     class="card-img-top"
                     alt="Leeftijd 14 - 17">
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card h-100">
            <div class="card-body text-center">
                <p class="card-text">Leeftijd 18 - 21</p>
                <img src="IMG/Gouden_Voetbaltoernooi_Badge-removebg-preview.png"
                     class="card-img-top"
                     alt="Leeftijd 18 - 21">
            </div>
        </div>
    </div>
</div>

<?php
toonFooter();
?>


</body>
</html>