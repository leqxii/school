<?php
echo "Voer een e-mailadres in: ";
$email = readline();

if (strpos($email, '@') !== false && strpos($email, '.') !== false) { 
    $emailParts = explode('@', $email);

    $username = $emailParts[0];

    echo "Username: $username\n";
}  else {
    echo "Ongeldig e-mailadres. Zorg ervoor dat het een @ en een . bevat. \n";
}
?>