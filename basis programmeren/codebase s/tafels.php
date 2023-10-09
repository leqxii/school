<?php
do {
    $tafel = intval(readline("Voer de gewenste tafel in: "));

    $beginpunt = intval(readline("Voer het beginpunt in: "));
    $eindpunt = intval(readline("Voer het eindpunt in: "));

    for ($i = $beginpunt; $i <= $eindpunt; $i++) {
        $resultaat = $i * $tafel;
        echo "$tafel x $i = $resultaat\n";
    }

    $keuze = readline("Wil je een andere tafel bekijken? (ja/nee): ");
} while (strtolower($keuze) === 'ja');
?>
