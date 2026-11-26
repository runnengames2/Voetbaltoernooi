<?php
require 'db.php';

$pdo = getDbConnection();

$gebruikersnaam = $_POST['gebruikersnaam'];
$password = $_POST['password'];

// Check of de gebruikersnaam al bestaat
$check = $pdo->prepare("SELECT idGebruiker FROM gebruikers WHERE gebruikersnaam = ?");
$check->execute([$gebruikersnaam]);

if ($check->rowCount() > 0) {
    die("Deze gebruikersnaam bestaat al.");
}

// Wachtwoord hashen
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Opslaan in database
$stmt = $pdo->prepare("INSERT INTO gebruikers (gebruikersnaam, wachtwoord, rol) VALUES (?, ?, ?)");
$stmt->execute([$gebruikersnaam, $password_hash, 'gebruiker']);

// Doorsturen naar login
header("Location: inloggen.php");
exit;
?>