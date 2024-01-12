<?php
include "connect.php";
$db = connect();

$tablesQuery = $db->query("SHOW TABLES FROM reisbureau");
$tablesResult = $tablesQuery->fetchAll(PDO::FETCH_COLUMN);

$db = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database gegevens aanpassen</title>
</head>
<body>
    <h2>Tabellen in de database 'reisbureau':</h2>
    <ul>
        <?php foreach ($tablesResult as $table) : ?>
            <li><?= $table; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>