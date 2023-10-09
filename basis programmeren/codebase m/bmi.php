<?php
$gewicht = floatval(readline("Voer uw gewicht in (kg): "));

$lengte = floatval(readline("Voer uw lengte in (cm): "));

$lengteInMeters = $lengte / 100;

$bmi = $gewicht / ($lengteInMeters * $lengteInMeters);

echo "Uw BMI is: " . number_format($bmi, 2) . "\n";

if ($bmi < 18.5) {
    echo "U heeft ondergewicht.\n";
} elseif ($bmi >= 18.5 && $bmi < 25) {
    echo "U heeft een gezond gewicht.\n";
} elseif ($bmi >= 25 && $bmi < 30) {
    echo "U heeft overgewicht.\n";
} else {
    echo "U heeft ernstig overgewicht (obesitas).\n";
}
?>
