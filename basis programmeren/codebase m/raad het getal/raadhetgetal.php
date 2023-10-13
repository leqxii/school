<?php
$willekeurigGetal = rand(1, 100);

$aantalBeurten = 0;

while (true) {
    $aantalBeurten++;
    echo "Raad het getal (tussen 1 en 100) of typ 'stop' om te stoppen: ";
    $antwoord = readline();

    if ($antwoord === 'stop') {
        echo "Je hebt ervoor gekozen om te stoppen. Het juiste getal was $willekeurigGetal.\n";
        break;
    }

    $geradenGetal = intval($antwoord);
    if ($geradenGetal < 1 || $geradenGetal > 100) {
        echo "Ongeldig antwoord. Voer een getal tussen 1 en 100 in.\n";
        continue;
    }

    if ($geradenGetal === $willekeurigGetal) {
        echo "Gefeliciteerd! Je hebt het juiste getal ($willekeurigGetal) geraden in $aantalBeurten beurten.\n";
        break;
    } elseif ($geradenGetal < $willekeurigGetal) {
        echo "Het juiste getal is hoger. Probeer opnieuw.\n";
    } else {
        echo "Het juiste getal is lager. Probeer opnieuw.\n";
    }
}

?>
