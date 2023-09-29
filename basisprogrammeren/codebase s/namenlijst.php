<?php
echo "Voer namen in (gescheiden door spaties): ";
$input = readline();

$namen = explode(' ', $input);

foreach ($namen as $naam) {
    echo $naam . "\n";
}
?>
