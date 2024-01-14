<?php
  session_start();
  include("includes/db.php");

  $gebruikersnaam = "";
  $wachtwoord = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $gebruikersnaam = $_POST["username"];
      $wachtwoord = $_POST["password"];
  }

  $query_leerling = "SELECT * FROM studenten WHERE login = '$gebruikersnaam' AND password = '$wachtwoord'";
  $result_leerling = $conn->query($query_leerling);

  if ($result_leerling->num_rows > 0) {
      $_SESSION["gebruiker"] = "leerling";
      header("Location: users/leerling_home.php");
      exit();
  } elseif ($gebruikersnaam == "Famke" && $wachtwoord == "123") {
      $_SESSION["gebruiker"] = "docent";
      header("Location: users/docent_home.php");
      exit();
  } else {
      $foutmelding = "Ongeldige gebruikersnaam of wachtwoord.";
  }

  $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
  <body>
    <div class="form">
      <p>Login</p>
      <form method="post" action="">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button type="submit">login</button>
      </form>
    </div>
  </body>
</html>
