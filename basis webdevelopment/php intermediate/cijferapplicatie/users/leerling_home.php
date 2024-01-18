<?php
  session_start();
  include("../includes/db.php");

  if (!isset($_SESSION["gebruiker"]) || $_SESSION["gebruiker"] !== "leerling") {
    header("Location: ../index.php");
    exit();
  }
  $student_id = $_SESSION['ID'];

  $query_resultaten = "SELECT * FROM resultaten WHERE student_id = '$student_id'";
  $result_resultaten = $conn->query($query_resultaten);

  $results = $result_resultaten->fetch_all(MYSQLI_ASSOC);

  $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <table>
      <tr>
        <th>Resultaat ID</th>
        <th>Toets ID</th>
        <th>Cijfer</th>
      </tr>
      <?php foreach ($results as $result): ?>
      <tr>
        <td><?= $result['resultaat_id'] ?></td>
        <td><?= $result['toets_id'] ?></td>
        <td><?= $result['cijfer'] ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>