<?php
$woorden = array(
    "appel",
    "banaan",
    "koffie",
    "stoel",
    "hond",
    "kat",
    "boek",
    "tafel",
    "lamp",
    "pizza",
    "vogel",
    "fiets",
    "zon",
    "maan",
    "ster"
);

$willekeurigWoord = $woorden[array_rand($woorden)];

$aantalPogingen = 0;

$geradenLetters = array_fill(0, strlen($willekeurigWoord), '.');

echo "Welkom bij het woordraadspel!\n";
echo "Het woord is: " . implode(" ", $geradenLetters) . "\n";

do {
    echo "Kies een letter: ";
    $ingevoerdeLetter = strtolower(readline());

    $aantalPogingen++;

    $correctGeraden = false;
    for ($i = 0; $i < strlen($willekeurigWoord); $i++) {
        if ($willekeurigWoord[$i] === $ingevoerdeLetter) {
            $geradenLetters[$i] = $ingevoerdeLetter;
            $correctGeraden = true;
        }
    }

    if ($correctGeraden) {
        echo "Goed geraden!\n";
    } else {
        echo "Letter $ingevoerdeLetter komt niet voor in het woord.\n";
    }

    echo "Het woord is: " . implode(" ", $geradenLetters) . "\n";

    if (implode("", $geradenLetters) === $willekeurigWoord) {
        echo "Gefeliciteerd! Je hebt het woord '$willekeurigWoord' geraden in $aantalPogingen pogingen.\n";
        echo "Wil je nog een keer spelen? (ja/nee): ";
        $doorgaan = strtolower(readline());
        if ($doorgaan !== 'ja') {
            break;
        } else {
            $willekeurigWoord = $woorden[array_rand($woorden)];
            $aantalPogingen = 0;
            $geradenLetters = array_fill(0, strlen($willekeurigWoord), '.');
            echo "Het nieuwe woord is: " . implode(" ", $geradenLetters) . "\n";
        }
    }
} while (true);

echo "Bedankt voor het spelen!\n";

?>
