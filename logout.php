<?php
if(session_start() === PHP_SESSION_NONE){
session_start();
}

$_SESSION = array();
$_SESSION['logged_out'] = true;

session_destroy();

header("Location: login.php");
exit();
?>