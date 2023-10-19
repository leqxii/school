<?php
  function berekenCijfer($maxPunten, $behaaldePunten) {
    if (!is_numeric($maxPunten) || !is_numeric($behaaldePunten)) {
      return false;
    }

    $cijfer = ($behaaldePunten / $maxPunten) * 10;

    $afgerondCijfer = number_format($cijfer, 2);

    return $afgerondCijfer;
  }
  
//  echo berekenCijfer(45, 29) . "\n";
//  echo berekenCijfer(34, 31) . "\n";
