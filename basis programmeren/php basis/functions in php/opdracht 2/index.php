<?php
  function checkDeelbaar($getal) {
    $resultaat = "";

    if ($getal % 3 == 0 && $getal % 5 == 0) {
        echo "Deelbaar door 3 en door 5";
    } elseif ($getal % 3 == 0) {
        echo "Deelbaar door 3 maar niet door 5";
    } elseif ($getal % 5 == 0) {
        echo "Deelbaar door 5 maar niet door 3";
    } else {
        echo "Niet deelbaar door 3 of 5";
    }

    return $resultaat;
  }

//  echo checkDeelbaar(15) . "\n";
//  echo checkDeelbaar(9) . "\n";
//  echo checkDeelbaar(10) . "\n";
//  echo checkDeelbaar(17) . "\n";