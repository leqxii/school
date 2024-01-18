<?php
  session_start();
  include("../includes/db.php");

  if (!isset($_SESSION["gebruiker"]) || $_SESSION["gebruiker"] !== "leerling") {
    header("Location: ../index.php");
    exit();
  }
  $student_id = $_SESSION['ID'];

  $query_resultaten = "SELECT resultaten.cijfer, toetsen.toetsnaam FROM resultaten INNER JOIN toetsen ON resultaten.toets_id = toetsen.toets_id WHERE resultaten.student_id = '$student_id'";
  $result_resultaten = $conn->query($query_resultaten);

  $results = $result_resultaten->fetch_all(MYSQLI_ASSOC);

  $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="../css/users.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <div class="table-container">
      <table>
        <tr>
          <th>Toets</th>
          <th>Cijfer</th>
        </tr>
        <?php foreach ($results as $result): ?>
        <tr>
          <td><?= $result['toetsnaam'] ?></td>
          <td><?= $result['cijfer'] ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </body>
</html>