<?php
echo "Voer de diameter van de cirkel in: ";
$diameter = floatval(readline());
$straal = $diameter / 2;

$omtrek = 2 * M_PI * $straal;

$oppervlakte = M_PI * pow($straal, 2);

echo "De omtrek van de cirkel is: " . number_format($omtrek, 2) . "\n";
echo "De oppervlakte van de cirkel is: " .
    number_format($oppervlakte, 2) .
    "\n";
?>
