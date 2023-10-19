<?php
  session_start();
  if (!isset($_SESSION['is_ingelogd'])) {
    header('Location: index.php');
  }
  
  if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Inlogscherm</title>
  </head>
  <body>
    <h1>Welkom op onze site</h1>
    <form method="post">
      <input type="submit" name="logout" value="Uitloggen" />
    </form>
  </body>
</html>
