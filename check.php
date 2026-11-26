<?php
session_start();
require 'db.php';

// Email + wachtwoord uit het formulier
$email = $_POST['email'];
$password = $_POST['password'];

// Gebruiker opzoeken in database
$sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Check of gebruiker bestaat + wachtwoord klopt
if ($user && password_verify($password, $user['password_hash'])) {

    // Sessie zetten
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['username'];

    // Redirect naar index.php
    header("Location: index.php");
    exit;