<?php
$aantalProducten = intval(readline("Hoeveel producten wil je op je boodschappenlijst plaatsen? "));

if ($aantalProducten <= 0 || !is_numeric($aantalProducten)) {
    echo "Ongeldige invoer. Voer een geldig getal in.\n";
    exit();
}

$producten = [];

for ($i = 1; $i <= $aantalProducten; $i++) {
    echo "Product $i van $aantalProducten: ";
    $product = readline();
    $producten[] = $product;
}

echo "\nDe volgende producten staan op je boodschappenlijst:\n";
foreach ($producten as $index => $product) {
    echo $product . "\n";
}
?>
