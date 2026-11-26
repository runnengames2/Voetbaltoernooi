<?php
require 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check of email al bestaat
$check = $pdo->prepare("SELECT id FROM users WHERE email = ?");
$check->execute([$email]);

if ($check->rowCount() > 0) {
    die("Dit e-mailadres bestaat al.");
}

// Wachtwoord hashen
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Opslaan in database
$stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
$stmt->execute([$username, $email, $password_hash]);

// Doorsturen naar login
header("Location: login.php");
exit;
?>