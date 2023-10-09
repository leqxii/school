<?php
$programmeertalen = array("PHP", "C#", "HTML", "JavaScript", "Java", "C++", "C");

array_push($programmeertalen, "Python", "Swift");

sort($programmeertalen);

foreach ($programmeertalen as $taal) {
    echo $taal . "\n";
}

$aantalItems = count($programmeertalen);
echo "Aantal items in de array: " . $aantalItems;
?>