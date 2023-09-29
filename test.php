<?php
$spelerOpties = array(
    "steen" => "steen.png",
    "papier" => "papier.png",
    "schaar" => "schaar.png"
);

$botOpties = array(
    "steen" => "botsteen.png",
    "papier" => "botpapier.png",
    "schaar" => "botschaar.png"
);

$resultaat = "";

if (isset($_POST['spelerKeuze'])) {
    $spelerKeuze = $_POST['spelerKeuze'];

    $opties = array("steen", "papier", "schaar");
    $botKeuze = $opties[array_rand($opties)];

    $spelerAfbeelding = $spelerOpties[$spelerKeuze];
    $botAfbeelding = $botOpties[$botKeuze];

    if ($spelerKeuze == $botKeuze) {
        $resultaat = "Gelijkspel!";
    } elseif (
        ($spelerKeuze == "steen" && $botKeuze == "schaar") ||
        ($spelerKeuze == "papier" && $botKeuze == "steen") ||
        ($spelerKeuze == "schaar" && $botKeuze == "papier")
    ) {
        $resultaat = "Je wint!";
    } else {
        $resultaat = "Bot wint!";
    }
}

if (!empty($resultaat)) {
    echo "<p>Jouw keuze: <img src='img/steenpapierschaar/{$spelerAfbeelding}' alt='{$spelerKeuze}' width='100' height='100'></p>";
    echo "<p>Bot's keuze: <img src='img/steenpapierschaar/{$botAfbeelding}' alt='{$botKeuze}' width='100' height='100'></p>";
    echo "<p>Resultaat: $resultaat</p>";
} else {
    echo "<form method='post'>";
    echo "<p>Kies jouw optie:</p>";
    foreach ($spelerOpties as $optie => $spelerAfbeelding) {
        echo "<button type='submit' name='spelerKeuze' value='$optie'>
            <img src='img/steenpapierschaar/{$spelerAfbeelding}' alt='$optie' width='100' height='100'></button>";
    }
    echo "</form>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Steen, Papier, Schaar</title>
</head>
<body>

    <?php
    ?>

</body>
</html>
