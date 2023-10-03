<?php
while (true) {
    $aantalProducten = (int)readline("Hoeveel producten heeft U: ");

    if ($aantalProducten >= 0) {
        break;
    } else {
        echo "Ongeldige invoer. Voer een positief getal in voor het aantal producten.\n";
    }
}

$bedragen = array();

for ($i = 0; $i < $aantalProducten; $i++) { 
    do {
        $bedrag = (float)readline("Geef bedrag " . ($i + 1) . " : ");
    } while (!is_numeric($bedrag));

    $bedragen[] = $bedrag;
}

$totaalBedrag = array_sum($bedragen);
echo "Totaal te betalen: " . $totaalBedrag . " euro\n";

$resterendBedrag = $totaalBedrag;

while ($resterendBedrag > 0) {
    $betaalwijze = strtolower(readline("Wilt u pinnen of contant betalen? "));

    if ($betaalwijze == "pinnen") {
        echo "Volg de instructies op de betaalautomaat.\n";
        break;
    } elseif ($betaalwijze == "contant") {
        $contantBedrag = ceil($resterendBedrag * 20) / 20;
        $betaaldBedrag = (float)readline("Hoeveel contant wilt u betalen: ");

        if ($betaaldBedrag >= 0 && $betaaldBedrag >= $contantBedrag) {
            $wisselgeld = $betaaldBedrag - $contantBedrag;
            echo "Bedankt! Uw wisselgeld is: " . $wisselgeld . " euro\n";
            break;
        } else {
            $resterendBedrag -= $betaaldBedrag;
            echo "U moet nog " . $resterendBedrag . " euro betalen.\n";
        }
    } else {
        echo "Ongeldige keuze. Kies 'pinnen' of 'contant'.\n";
    }
}
?>