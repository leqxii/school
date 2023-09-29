<?php
$scoreSpeler1 = intval(readline("Wat is de score van speler 1? "));

$scoreSpeler2 = intval(readline("Wat is de score van speler 2? "));

if ($scoreSpeler1 > $scoreSpeler2) {
    echo "Speler 1 heeft gewonnen.\n";
} elseif ($scoreSpeler2 > $scoreSpeler1) {
    echo "Speler 2 heeft gewonnen.\n";
} else {
    echo "Het is gelijkspel.\n";
}
?>
