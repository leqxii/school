<?php
$resultaten = "";

for ($i = 1; $i <= 1247; $i++) {
    $resultaat = $i * 1247;
    $resultaten .= $i . ' * 1247 = ' . $resultaat . '<br>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
    echo $resultaten;
    ?>
</body>
</html>
