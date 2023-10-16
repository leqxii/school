<?php
echo "Voer je geboortedatum in (DD-MM-YYYY): ";
$geboortedatum = readline();

$geboortedatum = DateTime::createFromFormat('d-m-Y', $geboortedatum);

if ($geboortedatum === false) {
    echo "Ongeldige geboortedatum. Voer de datum in het formaat DD-MM-YYYY in.\n";
    exit();
}

$huidigeDatum = new DateTime();
$leeftijd = $huidigeDatum->diff($geboortedatum)->y;

echo "Je bent $leeftijd jaar oud.\n";
?>
