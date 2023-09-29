<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timmermanbedrijf About Hout</title>
    <script>
        function showFields() {
            var rechthoekigCheckbox = document.getElementById("rechthoekig");
            var rondCheckbox = document.getElementById("rond");
            var rechthoekigFields = document.getElementById("rechthoekigFields");
            var rondFields = document.getElementById("rondFields");

            if (rechthoekigCheckbox.checked) {
                rechthoekigFields.style.display = "block";
                rondFields.style.display = "none";
            } else if (rondCheckbox.checked) {
                rechthoekigFields.style.display = "none";
                rondFields.style.display = "block";
            } else {
                rechthoekigFields.style.display = "none";
                rondFields.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <form method="get">
        <h2>Kies een houtsoort:</h2>
        <label>
            <img src="img/timmerbedrijf/berkenhout.png" alt="Berkenhout">
            <br>
            <input type="radio" id="berkenhout" name="houtsoort" value="berkenhout">
            Berkenhout - prijs per m2 € 25,00
        </label>
        <br>

        <label>
            <img src="img/timmerbedrijf/eikenhout.png" alt="Eikenhout">
            <br>
            <input type="radio" id="eikenhout" name="houtsoort" value="eikenhout">
            Eikenhout - prijs per m2 € 50,00
        </label>
        <br>

        <label>
            <img src="img/timmerbedrijf/sparrenhout.png" alt="Sparrenhout">
            <br>
            <input type="radio" id="sparrenhout" name="houtsoort" value="sparrenhout">
            Sparrenhout - prijs per m2 € 15,00
        </label>
        <br>

        <h2>Kies een tafelsoort:</h2>
        <label>
            <input type="radio" id="rechthoekig" name="tafelsoort" value="rechthoekig" onclick="showFields()">
            Ik wil een rechthoekige tafelblad.
        </label>
        <br>

        <label>
            <input type="radio" id="rond" name="tafelsoort" value="rond" onclick="showFields()">
            Ik wil een ronde tafelblad.
        </label>

        <div id="rechthoekigFields" style="display: none;">
            <h3>Vul de breedte en lengte in:</h3>
            <label for="breedte">Breedte in mm:</label>
            <input type="text" id="breedte" name="breedte">
            <br>

            <label for="lengte">Lengte in mm:</label>
            <input type="text" id="lengte" name="lengte">
        </div>

        <div id="rondFields" style="display: none;">
            <h3>Vul de diameter in:</h3>
            <label for="diameter">Diameter in mm:</label>
            <input type="text" id="diameter" name="diameter">
        </div>

        <h2>Berekende prijs:</h2>

        <input type="submit" value="Bestellen!">
    </form>

    <?php
    $houtsoort = $_GET["houtsoort"];
    $tafelsoort = $_GET["tafelsoort"];
    
    if ($houtsoort && $tafelsoort) {
        if ($tafelsoort == "rechthoekig") {
            $breedte = floatval($_GET["breedte"]);
            $lengte = floatval($_GET["lengte"]);
            $oppervlakte = ($breedte / 1000) * ($lengte / 1000);
        } elseif ($tafelsoort == "rond") {
            $diameter = floatval($_GET["diameter"]);
            $straal = $diameter / 2000; 
            $oppervlakte = M_PI * $straal * $straal; 
        }
    
        $houtsoorten = [
            "berkenhout" => 25.00,
            "eikenhout" => 50.00,
            "sparrenhout" => 15.00,
        ];
        
        $prijsPerVierkanteMeter = $houtsoorten[$houtsoort];
        $totaalPrijs = $oppervlakte * $prijsPerVierkanteMeter;
   
        echo "Prijs per vierkante meter: € " . number_format($prijsPerVierkanteMeter, 2) . "<br>";
        echo "Oppervlakte: " . number_format($oppervlakte, 2) . " vierkante meter<br>";
        echo "Totale prijs: € " . number_format($totaalPrijs, 2);
    } else {
        echo "Selecteer een geldige houtsoort en tafelsoort om de prijs te berekenen.";
    }
    ?>
</body>
</html>

