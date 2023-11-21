<?php
    $aantalPersonen = 5;
    $leeftijden = vraagLeeftijden($aantalPersonen);

    // Bereken statistieken
    list($boven18, $onder18, $gemiddeldeLeeftijd) = berekenStatistieken($leeftijden);

    // Toon resultaten
    toonResultaten($boven18, $onder18, $gemiddeldeLeeftijd);
?>

<?php
    function vraagLeeftijden($aantalPersonen)
    {
        $leeftijden = [];

        for ($i = 0; $i < $aantalPersonen; $i++) 
        {
            do 
            {
                $leeftijd = (float)readline(($i + 1) . ". Geef leeftijd op: ");
            } 
            while (!is_numeric($leeftijd));

            $leeftijden[] = $leeftijd;
        }

        return $leeftijden;
    }

    function berekenStatistieken($leeftijden)
    {
        $boven18 = 0;
        $onder18 = 0;
        $totaalLeeftijd = 0;

        foreach ($leeftijden as $leeftijd) 
        {
            if ($leeftijd >= 18) 
            {
                $boven18++;
            } 
            else 
            {
                $onder18++;
            }
            $totaalLeeftijd += $leeftijd;
        }

        $gemiddeldeLeeftijd = $totaalLeeftijd / count($leeftijden);

        return [$boven18, $onder18, $gemiddeldeLeeftijd];
    }

    function toonResultaten($boven18, $onder18, $gemiddeldeLeeftijd)
    {
        echo "Er " . ($boven18 == 1 ? "is 1 persoon" : "zijn $boven18 personen") . " 18 jaar of ouder.\n";
        echo "Er " . ($onder18 == 1 ? "is 1 persoon" : "zijn $onder18 personen") . " jonger dan 18 jaar.\n";
        echo "De gemiddelde leeftijd is $gemiddeldeLeeftijd jaar.\n";
    }
?>