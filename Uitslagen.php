
<?php
// Sessie starten
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Functions en databaseverbinding laden
require_once 'functions.php';
require_once 'db.php';

// Databaseverbinding maken
$pdo = getDbConnection();

// Uitslagen ophalen uit de tabel wedstrijden
$sql = "SELECT * FROM wedstrijden ORDER BY datum DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$uitslagen = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Wedstrijduitslagen</title>

    <link rel="stylesheet" href="CSS/Style.css">

    <link rel="icon" type="image/x-icon"
        href="IMG/Gouden_Voetbaltoernooi_Badge-removebg-preview.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <?php
    // Navbar weergeven
    toonNavbar();
    ?>

    <div class="container mt-4">

        <h1>Wedstrijduitslagen</h1>

        <table class="table table-striped table-bordered">

            <thead>
                <tr>
                    <th>Toernooi Naam</th>
                    <th>Thuis team</th>
                    <th>Uit team</th>
                    <th>Score thuis</th>
                    <th>Score uit</th>
                    <th>Datum</th>
                </tr>
            </thead>

            <tbody>

                <?php if (count($uitslagen) > 0): ?>

                    <?php foreach ($uitslagen as $wedstrijd): ?>

                        <tr>

                            <td><?= htmlspecialchars($wedstrijd['toernooi_naam']) ?></td>

                            <td><?= htmlspecialchars($wedstrijd['team_thuis']) ?></td>

                            <td><?= htmlspecialchars($wedstrijd['team_uit']) ?></td>

                            <td><?= htmlspecialchars($wedstrijd['score_thuis']) ?></td>

                            <td><?= htmlspecialchars($wedstrijd['score_uit']) ?></td>

                            <td><?= htmlspecialchars($wedstrijd['datum']) ?></td>
                        </tr>

                    <?php endforeach; ?>

                <?php else: ?>

                    <tr>
                        <td colspan="7" class="text-center">
                            Er zijn nog geen uitslagen beschikbaar.
                        </td>
                    </tr>

                <?php endif; ?>

            </tbody>

        </table>

    </div>

    <?php
    // Footer weergeven
    toonFooter();
    ?>

</body>
</html>
