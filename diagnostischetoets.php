<?php
  $getallen = [];

  /* Vraag voor input. */
  for ($i = 0; $i < 5; $i++) {
    do {
      $getal = (float) readline(($i + 1) . ". Geef leeftijd op: ");
    } while (!is_numeric($getal));
    
    $getallen[] = $getal;
  }

  