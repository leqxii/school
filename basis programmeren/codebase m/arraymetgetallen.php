<?php
$array = [];
for ($i = 0; $i < 20; $i++) {
    $array[] = rand(0,500);
}

echo "Kies een getal: ";
$vergelijkingsgetal = intval(readline());

foreach ($array as &$getal) {
    if ($getal >= $vergelijkingsgetal) {
        $getal += 10;
    } else {
        $getal -= 5;
    }
}

echo "Waarden in de array: \n";
foreach ($array as $getal) {
    echo $getal . " ";
}
?>