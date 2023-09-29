<?php
$conversiefactoren = [
    "Kilometer" => 0.001,
    "Hectometer" => 0.01,
    "Decameter" => 1,
    "Meter" => 10,
    "Decimeter" => 100,
    "Centimeter" => 1000,
    "Millimeter" => 10000
];

echo "Welke waarde: ";
$waarde = floatval(trim(fgets(STDIN)));

echo "Welke grootheid: ";
$grootheid1 = trim(fgets(STDIN));

echo "Welke gewenste grootheid: ";
$grootheid2 = trim(fgets(STDIN));

if (array_key_exists($grootheid1, $conversiefactoren) && array_key_exists($grootheid2, $conversiefactoren)) {
    $omgerekendeWaarde = $waarde * ($conversiefactoren[$grootheid2] / $conversiefactoren[$grootheid1]);

    echo "Omrekening: {$waarde} {$grootheid1} = {$omgerekendeWaarde} {$grootheid2}\n";
} else {
    echo "Ongeldige grootheid(en) ingevoerd.\n";
}
?>
