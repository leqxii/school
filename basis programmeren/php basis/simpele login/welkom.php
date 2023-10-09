<?php
$opgeslagenWachtwoord = 'paddenstoel';

$ingevoerdeNaam = $_POST['naam'];
$ingevoerdWachtwoord = $_POST['wachtwoord'];

if ($ingevoerdWachtwoord === $opgeslagenWachtwoord) {
    $toegang = "Hey, welkom in onze app";
} else {
    $toegang = "Je hebt geen toegang met deze naam- en wachtwoord-combinatie.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welkom</title>
</head>
<body>
    <h2><?php echo $toegang ?></h2>
</body>
</html>
