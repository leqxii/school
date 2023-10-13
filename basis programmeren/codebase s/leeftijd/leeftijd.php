<?php
$leeftijd = intval(readline("Voer uw leeftijd in: "));

if ($leeftijd < 16) {
    $jaarTot16 = 16 - $leeftijd;
    echo "Het duurt nog $jaarTot16 jaar voordat u 16 jaar wordt.\n";
} else {
    $ouderDan16 = $leeftijd - 16;
    echo "U bent $ouderDan16 jaar ouder dan 16 jaar.\n";
}

if ($leeftijd < 50) {
    $jongerDan50 = 50 - $leeftijd;
    echo "Het duurt nog $jongerDan50 jaar voordat u 50 jaar wordt.\n";
} else {
    $ouderDan50 = $leeftijd - 50;
    echo "U bent $ouderDan50 jaar ouder dan 50 jaar.\n";
}

if ($leeftijd < 67) {
    $jaarTot67 = 67 - $leeftijd;
    echo "Het duurt nog $jaarTot67 jaar voordat u 67 jaar wordt.\n";
} else {
    $ouderDan67 = $leeftijd - 67;
    echo "U bent $ouderDan67 jaar ouder dan 67 jaar.\n";
}

if ($leeftijd < 100) {
    $jaarTot100 = 100 - $leeftijd;
    echo "Het duurt nog $jaarTot100 jaar voordat u 100 jaar wordt.\n";
} else {
    $ouderDan100 = $leeftijd - 100;
    echo "U bent $ouderDan100 jaar ouder dan 100 jaar.\n";
}
?>
