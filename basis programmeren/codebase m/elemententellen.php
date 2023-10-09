<?php
$woonplaatsen = [
    "Apeldoorn",
    "Kampen",
    "Zwolle",
    "Zwolle",
    "Lelystad",
    "Zwolle",
    "Dronten",
    "Elburg",
    "Zwolle",
    "Emmeloord",
    "Dronten",
    "Zwolle",
    "Zwolle",
    "Apeldoorn",
    "Heerde",
    "Zeewolde",
    "Kampen",
    "Apeldoorn",
];

$telwoorden = array_count_values($woonplaatsen);
arsort($telwoorden); 

foreach ($telwoorden as $woonplaats => $aantal) {
    echo "$woonplaats: $aantal \n";
}
?>
