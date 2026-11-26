
<?php
function toonNavbar() {
?>

<nav class="navbar navbar-expand-lg navbar-dark voetbal-navbar">
  <div class="container-fluid">

    <!-- Logo -->
    <a class="navbar-brand me-4" href="index.php">
      <img src="IMG/Gouden_Voetbaltoernooi_Badge-removebg-preview.png"
           alt="Logo" height="55">
    </a>

    <!-- Navigatiemenu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <?php if (isset($_SESSION['logged_in'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="Kalender.php">Kalender</a>
          </li>
        <?php endif; ?>
        <li class="nav-item">
          <a class="nav-link" href="Uitslagen.php">Uitslagen</a>
        </li>
        <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin'): ?>
            <li class="nav-item">
                <a class="nav-link" href="filmsbeheren.php">Films beheren</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="seriesbeheer.php">Series beheren</a>
            </li>
         <?php endif; ?>
        <?php if (!isset($_SESSION['logged_in'])): ?>
        <li class="nav-item">
          <a class="nav-link register-knop" href="Registreren.php">Registreren</a>
        </li>

        <li class="nav-item">
          <a class="nav-link login-knop" href="Inloggen.php">Inloggen</a>
        </li>
        <?php endif; ?>
        <?php if (isset($_SESSION['logged_in'])): ?>
          <a class="nav-link login-knop" href="logout.php">Uitloggen</a>
        <?php endif; ?>
      </ul>
    </div>

  </div>
</nav>

<?php
}
?>

<?php
function toonFooter() {
?>
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
<?php
}
?>