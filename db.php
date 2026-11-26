
<?php
define("HOST", "localhost");
define("DBNAME", "voetbaltoernooi");
define("USER", "root");
define("PASS", "");

function getDbConnection() {
    static $con = null;

    // Bestaande verbinding hergebruiken
    if ($con !== null) {
        return $con;
    }

    try {
        $con = new PDO(
            'mysql:host=' . HOST . ';dbname=' . DBNAME . ';charset=utf8mb4',
            USER,
            PASS,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]
        );

        $con->exec("CREATE TABLE IF NOT EXISTS gebruikers (
            idGebruiker INT AUTO_INCREMENT PRIMARY KEY,
            gebruikersnaam VARCHAR(50) NOT NULL UNIQUE,
            wachtwoord VARCHAR(255) NOT NULL,
            rol VARCHAR(50) NOT NULL
        )");

    } catch (PDOException $e) {
        error_log($e->getMessage());
        die('Er is een probleem met de databaseverbinding.');
    }

    return $con;
}
?>
