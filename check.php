<?php
// Controleren van het inlogformulier en toekennen van sessiegegevens.
session_start();
require_once "db.php";

// Haal gebruikersnaam en wachtwoord uit het formulier.
$username = $_POST['username'];
$password = $_POST['password'];

// Kijk in de database of deze combinatie klopt.
$stmt = $pdo->prepare("SELECT * FROM user WHERE login = ? AND password = ?");
$stmt->execute([$username, $password]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    // Aanmelden gelukt: zet sessievariabelen zodat de rest van de site weet dat iemand is ingelogd.
    $_SESSION['logged_in'] = true;
    $_SESSION['user'] = $user['login'];
    $_SESSION['isadmin'] = $user['isadmin'];

    header("Location: index.php");
    exit();

} else {
    // Foutmelding voor verkeerde inloggegevens.
    echo "
    <script src='https://code.jquery.com/jquery-3.7.1.min.js'></script>
    <script>
        $(function () {
            alert('Verkeerde gebruikersnaam of wachtwoord');
            window.location.href = 'login.php';
        });
    </script>
    ";
}
?>
