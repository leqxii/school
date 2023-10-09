<?php
$inhoud = readline("Cilinderinhoud in liter (L): ");
$luchtdruk = readline("Druk op de manometer in bar (b): ");
$debiet = readline("Benodigd aantal liter zuurstof per minuut (lpm): ");

$tijd = ($inhoud * $luchtdruk) / $debiet;

echo "De patiënt kan de fles nog " . $tijd . " minuten gebruiken.";
?>