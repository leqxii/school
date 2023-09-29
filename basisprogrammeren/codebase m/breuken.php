<?php
$deeltal = readline("Voer het deeltal in: ");
$deler = readline("Voer de deler in: ");

if ($deler != 0) {
    $quotient = $deeltal / $deler;

    if ($quotient == (int)$quotient) {
        echo "Het quotiënt is: " . $quotient . "\n";
    } else {
        echo "Het quotiënt is: " . $deeltal . "/" . $deler . "\n";
    }
} else {
    echo "De deler mag niet nul zijn. Probeer opnieuw.\n";
}
?>
