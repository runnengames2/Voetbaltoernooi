<?php
session_start();
require 'db.php';

$pdo = getDbConnection();

$gebruikersnaam = $_POST['gebruikersnaam'];
$password = $_POST['password'];

// Gebruiker opzoeken in database
$sql = "SELECT * FROM gebruikers WHERE gebruikersnaam = :gebruikersnaam LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->execute(['gebruikersnaam' => $gebruikersnaam]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Check of gebruiker bestaat + wachtwoord klopt
if ($user && password_verify($password, $user['wachtwoord'])) {

    // Sessie zetten
    $_SESSION['logged_in'] = true;
    $_SESSION['rol'] = $user['rol'];

    // Redirect naar index.php
    header("Location: index.php");
    exit;
} else {
    echo "Email or password is incorrect.";
}