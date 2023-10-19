<?php
  session_start();
  $_SESSION = array();
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Inlogscherm</title>
  </head>
  <body>
    <div class="container">
      <h3>Uw gegevens:</h3>
      <form action="login.php" method="post">
        <div class="input-container">
          <label for="naam">Username:</label>
          <input type="text" name="login" />
        </div>

        <div class="input-container">
          <label for="wachtwoord">Wachtwoord:</label>
          <input type="password" name="wachtwoord" />
        </div>

        <input type="submit" value="Inloggen" />
      </form>
    </div>
  </body>
</html>
