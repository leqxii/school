<?php
  include "includes/connect.php";
  $db = connect();

  if (isset($_GET['id'])) {
    $artistId = $_GET['id'];

    $deleteQuery = $db->prepare("DELETE FROM artist WHERE id = :id");
    $deleteQuery->bindParam(':id', $artistId, PDO::PARAM_INT);
    $deleteQuery->execute();

    header("Location: index.php");
    exit();
  } else {
    header("Location: index.php");
    exit();
  }
?>