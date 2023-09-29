<?php
$selectedColor = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["color"])) {
        $selectedColor = $_POST["color"];
        $message = "Wauw, mooi " . $selectedColor . " is niet lelijk!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kleurenkiezer</title>
    
    <?php
    if (!empty($selectedColor)) {
        echo '<style>body { background-color: ' . $selectedColor . '; }</style>';
    }
    ?>
</head>
<body>
    <form method="post">
        <label for="colorSelect">Kies een kleur:</label>
        <select id="colorSelect" name="color">
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="yellow">yellow</option>
            <option value="pink">pink</option>
        </select>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (!empty($message)) {
        echo '<div id="result">';
        echo '<h1>' . $message . '</h1>';
        echo '</div>';
    }
    ?>
</body>
</html>
