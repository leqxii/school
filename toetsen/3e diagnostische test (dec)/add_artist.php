<?php
  include "includes/connect.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $country = $_POST["country"];

    $db = connect();

    $stmt = $db->prepare("INSERT INTO artist (name, country) VALUES (:name, :country)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':country', $country);

    try {
        $stmt->execute();
        echo "Succesvol toegevoegd.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $db = null;
  }
?>
