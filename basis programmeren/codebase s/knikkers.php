<?php
echo "Voer een aantal knikkers in: ";

$aantalKnikkers = intval(readline());

if ($aantalKnikkers >= 1 && $aantalKnikkers <= 20) {
    $overgeblevenKnikkers = 20 - $aantalKnikkers;

    echo "Er is " . $aantalKnikkers . " knikker opgegooid, nog " . $overgeblevenKnikkers . " knikkers in mijn zak.\n";
} else {
    echo "Fout: Voer een aantal knikkers in tussen 1 en 20.\n";
}
?>
