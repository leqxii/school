<?php
$zin = readline("Voer een zin in: ");

$hoofdletters = strtoupper($zin);
$kleineletters = strtolower($zin);
$eersteletterwoorden = ucwords($zin);
$eersteletterzin = ucfirst($zin);

echo "$hoofdletters\n";
echo "$kleineletters\n";
echo "$eersteletterwoorden\n";
echo "$eersteletterzin\n";
?>
