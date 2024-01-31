<?php
  include "includes/connect.php";
  $db = connect();

  if (isset($_GET['id'])) {
    $artistId = $_GET['id'];

    $query = $db->prepare("SELECT * FROM artist WHERE id = :id");
    $query->bindParam(':id', $artistId, PDO::PARAM_INT);
    $query->execute();
    $artist = $query->fetch(PDO::FETCH_ASSOC);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'];
      $year = $_POST['year'];

      if (empty($errors)) {
        $updateQuery = $db->prepare("UPDATE artist SET name = :name, year = :year WHERE id = :id");
        $updateQuery->bindParam(':name', $name, PDO::PARAM_STR);
        $updateQuery->bindParam(':year', $year, PDO::PARAM_INT);
        $updateQuery->bindParam(':id', $artistId, PDO::PARAM_INT);
        $updateQuery->execute();

        header("Location: index.php");
        exit();
      }
    }
  } else {
    header("Location: index.php");
    exit();
  }

  $db = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Artist</title>
</head>
<body>
  <h2>Edit Artist</h2>
  <form method="POST" onsubmit="return validateForm()">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?= $artist['name']; ?>">
    <br>
    <label for="year">Year:</label>
    <input type="text" id="year" name="year" value="<?= $artist['year']; ?>">
    <br>
    <input type="submit" value="Update">
  </form>
  <script>
    function validateForm() {
      var name = document.getElementById('name').value;
      var year = document.getElementById('year').value;

      var nameRegex = /^[a-zA-Z ]{3,50}$/;
      var yearRegex = /^[0-9]{4}$/;

      var isValid = true;

      if (!nameRegex.test(name)) {
        isValid = false;
      }

      if (!yearRegex.test(year) || year < 1940 || year > 2024) {
        isValid = false;
      }

      return isValid;
    }
  </script>
</body>
</html>
