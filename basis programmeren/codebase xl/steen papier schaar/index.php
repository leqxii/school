<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Steen, Papier, Schaar</title>
</head>

<body>
    <?php
$playerWins = 0;
$computerWins = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $playerChoice = $_POST['choice'];
    $playerImage = "img/$playerChoice.png";

    $choices = ['bot_steen', 'bot_papier', 'bot_schaar'];
    $computerChoice = $choices[array_rand($choices)];
    $computerImage = "img/$computerChoice.png";

    echo "<h2>Ronde</h2>";
    echo "<div class='choice'>";
    echo "<img src='$playerImage' alt='$playerChoice'>";
    echo "<img src='$computerImage' alt='$computerChoice'>";
    echo "</div>";

    if ($playerChoice == $computerChoice) {
        echo "<p>Gelijkspel!</p>";
    } elseif (
        ($playerChoice == 'steen' && $computerChoice == 'bot_schaar') ||
        ($playerChoice == 'papier' && $computerChoice == 'bot_steen') ||
        ($playerChoice == 'schaar' && $computerChoice == 'bot_papier')
    ) {
        echo "<p>Jij wint deze ronde!</p>";
        $playerWins++;
    } else {
        echo "<p>Computer wint deze ronde!</p>";
        $computerWins++;
    }
}
?>

    <form method="post">
        <h2>Kies je hand:</h2>
        <label><input type="radio" name="choice" value="steen"> Steen</label>
        <label><input type="radio" name="choice" value="papier"> Papier</label>
        <label><input type="radio" name="choice" value="schaar"> Schaar</label>
        <br>
        <input type="submit" value="Speel ronde">
    </form>
</body>

</html>