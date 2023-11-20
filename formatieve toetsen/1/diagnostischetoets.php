<?php
  $leeftijden = [];

  /* Vraag voor input. */
  for ($i = 0; $i < 5; $i++) {
    do {
      $leeftijd = (float) readline(($i + 1) . ". Geef leeftijd op: ");
    } while (!is_numeric($leeftijd));
    
    $leeftijden[] = $leeftijd;
  }

  /* Berekeningen. */
  $boven18 = 0;
  $onder18 = 0;
  $totaalLeeftijd = 0;

  foreach ($leeftijden as $leeftijd) {
    if ($leeftijd >= 18) {
        $boven18++;
    } else {
        $onder18++;
    }
    $totaalLeeftijd += $leeftijd;
  }
  $gemiddeldeLeeftijd = $totaalLeeftijd / count($leeftijden);  

  /* Output. */
  echo "Er " . ($boven18 == 1 ? "is 1 persoon" : "zijn $boven18 personen") . " 18 jaar of ouder.\n";
  echo "Er " . ($onder18 == 1 ? "is 1 persoon" : "zijn $onder18 personen") . " jonger dan 18 jaar.\n";
  echo "De gemiddelde leeftijd is $gemiddeldeLeeftijd jaar.\n";