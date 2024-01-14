<?php
  session_start();
  include("../includes/db.php");

  if (!isset($_SESSION["gebruiker"]) || $_SESSION["gebruiker"] !== "leerling") {
    header("Location: ../index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
    
  </body>
</html>