<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cijferapp";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Verbinding mislukt: " . $conn->connect_error);
  }
