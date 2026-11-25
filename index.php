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
    
<nav class="navbar navbar-expand-lg navbar-dark voetbal-navbar">
  <div class="container-fluid">

    <!-- Logo helemaal links -->
    <a class="navbar-brand me-4" href="index.php">
      <img src="IMG/Gouden_Voetbaltoernooi_Badge-removebg-preview.png" alt="Logo" height="55">
    </a>

    <!-- Navigatiemenu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="Kalender.php">Kalender</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Uitslagen.php">Uitslagen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link register-knop" href="Registreren.php">Registreren</a>
        </li>
        <li class="nav-item">
          <a class="nav-link login-knop" href="Inloggen.php">Inloggen</a>
        </li>
      </ul>
    </div>

  </div>
</nav>

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

<footer class="voetbal-footer">
    <div class="footer">
        <div class="footer-links">
            <img src="IMG/ING-Logo-removebg-preview.png" alt="ING Logo">
        </div>
        <div class="footer-midden">
            <p class="mb-0">© 2027 Voetbaltoernooi</p>
        </div>
        <div class="footer-rechts">
            <img src="IMG/KPN1.png" alt="KPN Logo">
        </div>
    </div>
</footer>


</body>
</html>