<?php
if (isset($_GET['auto'])) {
    $selectedCar = $_GET['auto'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto formulier</title>
</head>
<body>
    <h1>Nice cars</h1>
    <?php
    echo '<img src="img/' .
        $selectedCar .
        '-1.png" alt="' .
        $selectedCar .
        ' 1">';
    echo '<img src="img/' .
        $selectedCar .
        '-2.png" alt="' .
        $selectedCar .
        ' 2">';
        
?>
</body>
</html>
