<?php
  session_start();

  if (isset($_POST['login']) && isset($_POST['wachtwoord'])) {
    $connectie = new PDO(
      'mysql:hostname=localhostl;dbname=php basis/database login','root',''
    );

    $query = $connectie->prepare("select * from user where email = :email");
    $query -> bindParam(':email', $_POST['login'], PDO::PARAM_STR);
    $query -> execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if ($result && $result['password'] == $_POST['wachtwoord']) {
      $_SESSION['is_ingelogd'] = $result['email'];
    }
  }

  if (isset($_SESSION['is_ingelogd'])) {
    echo "<h1>Hey, welkom in onze app</h1>";
  } else {
    echo "<h3>Je hebt geen toegang met deze naam- en wachtwoord-combinatie</h3>";
  }
?>

<link rel="stylesheet" href="style.css" type="text/css" />
