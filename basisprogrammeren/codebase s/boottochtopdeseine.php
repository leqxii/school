<?php
$normalePrijs = 12;

if ($leeftijd <= 2) {
    $prijs = 0; //
} elseif ($leeftijd >= 3 && $leeftijd <= 16) {
    $prijs = $normalePrijs * 0.5; //
} elseif ($leeftijd >= 65) {
    $prijs = $normalePrijs * 0.75;
} else {
    $prijs = $normalePrijs;
}

echo "De prijs voor uw tochtje is: €" . number_format($prijs, 2) . "\n";
?>
