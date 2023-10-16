<?php
$leeftijd = intval(readline("Voer uw leeftijd in: "));

if ($leeftijd < 9 || $leeftijd > 118) {
    echo "\n";
} else {
    if (
        $leeftijd == 10 ||
        $leeftijd == 16 ||
        $leeftijd == 18 ||
        $leeftijd == 50 ||
        $leeftijd == 67 ||
        $leeftijd == 100
    ) {
        echo "Gefeliciteerd, u bent $leeftijd jaar oud!\n";
    }

    if ($leeftijd < 67 && $leeftijd + 5 >= 67) {
        echo "Waarschuwing: u bent bijna 67 jaar oud.\n";
    }
}
?>
