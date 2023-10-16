<?php
do {
    $willekeurigGetal = rand(0, 1);

    if ($willekeurigGetal === 0) {
        $uitkomst = "kop";
    } else {
        $uitkomst = "munt";
    }

    echo "De uitkomst is: $uitkomst\n";

    echo "Wil je nog een keer? (ja/nee): ";
    $antwoord = readline();
} while (strtolower($antwoord) === 'ja');
?>
