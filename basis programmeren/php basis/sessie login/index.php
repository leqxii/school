<?php
  session_start();
  if (isset($_POST['naam']) && isset($_POST['wachtwoord'])) {
    if ($_POST['naam'] == 'karel' && $_POST['wachtwoord'] == '1234') {
      $_SESSION['is_ingelogd'] = true;
      header('Location: toegang.php');
    } else {
      header('Location: geen-toegang.html');
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Inlogscherm</title>
  </head>
  <body>
    <h3>Uw gegevens:</h3>
    <form method="post">
      <label for="naam">Naam:</label>
      <input type="text" name="naam" required />

      <label for="wachtwoord">Wachtwoord:</label>
      <input type="password" name="wachtwoord" required />

      <input type="submit" value="Inloggen" />
    </form>
  </body>
</html>
