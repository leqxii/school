<?php
$aantalLiterinTankVoorRit = floatval(readline("Geef het aantal liter in de tank voor de rit: "));
$aantalLiterinTankNaRit = floatval(readline("Geef het aantal liter in de tank na de rit: "));
$kilometerstandVoorRit = floatval(readline("Geef de kilometerstand bij aanvang van de rit: "));
$kilometerstandNaRit = floatval(readline("Geef de kilometerstand aan het einde van de rit: "));

$gemiddeldVerbruik = (100 * ($aantalLiterinTankVoorRit - $aantalLiterinTankNaRit)) / ($kilometerstandNaRit - $kilometerstandVoorRit);

echo "Het gemiddelde verbruik van de auto tijdens deze rit was: " . number_format($gemiddeldVerbruik, 2) . " liter per 100 kilometer\n";
?>
