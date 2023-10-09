<?php
echo "Geef je lotto getallen (getallen moeten tussen 1 en 42 liggen):\n";

$gebruikerGetallen = [];
for ($i=0; $i < 6; $i++) { 
    $getal = readline("Geef lotto nummer " . ($i + 1) . ": ");
    if ($getal < 1 || $getal > 42) {
        echo "Ongeldig getal. Voer een getal tussen 1 en 42 in.\n";
        $i--;
        return;
    }

    $gebruikerGetallen[] = $getal;
}

$lottoTrekking = [];
for ($i=0; $i < 6; $i++) { 
    $lottoTrekking[] = rand(1, 42);
}

echo "Je gekozen cijfers zijn: " . implode(" ", $gebruikerGetallen) . "\n";
echo "De trekking cijfers zijn: " . implode(" ", $lottoTrekking) . "\n";

$aantalOvereenkomsten = count(array_intersect($gebruikerGetallen, $lottoTrekking));

if ($aantalOvereenkomsten == 3) {
    echo "Je hebt 3 juiste cijfers! Je wint €10.\n";
} elseif ($aantalOvereenkomsten == 4) {
    echo "Je hebt 4 juiste cijfers! Je wint €1.000.\n";
} elseif ($aantalOvereenkomsten == 5) {
    echo "Je hebt 5 juiste cijfers! Je wint €100.000.\n";
} elseif ($aantalOvereenkomsten == 6) {
    echo "Je hebt 6 juiste cijfers! Je wint €10.000.000.\n";
} else {
    echo "Je hebt 0 euro gewonnen.\n";
}
?>