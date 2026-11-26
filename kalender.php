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

<div class="container mt-5 mb-5">

    <h1 class="text-center mb-5">Wedstrijdschema</h1>

    <div class="row">

        <?php while ($row = $stmt->fetch()) : ?>

            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-header bg-success text-white text-center">
                        <?php echo $row['datum']; ?>
                    </div>

                    <div class="card-body text-center">

                        <h4>
                            <?php echo htmlspecialchars($row['team_thuis']); ?>
                            <br>
                            <span class="text-success">VS</span>
                            <br>
                            <?php echo htmlspecialchars($row['team_uit']); ?>
                        </h4>

                        <hr>

                        <h5>
                            <?php echo $row['score_thuis']; ?>
                            -
                            <?php echo $row['score_uit']; ?>
                        </h5>

                    </div>

                </div>

            </div>

        <?php endwhile; ?>

    </div>

</div>

<?php toonFooter(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>