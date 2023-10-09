<?php
$klantenkaart = readline("Heb je een klantenkaart (ja/nee): ");
$klantenkaart_korting = ($klantenkaart === 'ja');

$aantal_schoenen = readline("Hoeveel paar schoenen wil je kopen: ");

$prijs_per_paar = 50;
if ($aantal_schoenen >= 2 && $klantenkaart_korting) {
    $totaalPrijs = $aantal_schoenen * $prijs_per_paar *0.9;
} else { 
    $totaalPrijs = $aantal_schoenen * $prijs_per_paar;
}

echo "De prijs van $aantal_schoenen paar schoenen is: " . number_format($totaalPrijs, 2) . " euro."
?>