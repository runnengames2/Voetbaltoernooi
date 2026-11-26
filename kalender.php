<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once 'functions.php';
include_once 'db.php';

$con = getDbConnection();

$sql = "SELECT * FROM wedstrijden ORDER BY datum ASC";
$stmt = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender</title>

    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="icon" type="image/x-icon" href="IMG/Gouden_Voetbaltoernooi_Badge-removebg-preview.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php toonNavbar(); ?>



<?php toonFooter(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>