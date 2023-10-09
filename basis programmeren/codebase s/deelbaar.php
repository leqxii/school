<?php
$deeltal = readline("Voer het deeltal in: ");
$deler = readline("Voer de deler in: ");

if ($deler != 0) {
    if ($deeltal % $deler == 0) {
        echo "De deler past in zijn geheel in het deeltal.\n";
    } else {
        echo "De deler past niet in zijn geheel in het deeltal.\n";
    }
} else {
    echo "De deling kan niet worden uitgevoerd omdat de deler nul is.\n";
}
?>
