<?php
  include "includes/connect.php";
  $db = connect();

  $query = $db->query("SELECT * FROM artist");
  $artists = $query->fetchAll(PDO::FETCH_ASSOC);

  $db = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top 2000</title>
</head>
<body>
  <table>
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Country</th>
      <th>Year</th>
      <th colspan="2"></th>
    </thead>
    <tbody>
    <?php foreach ($artists as $artist) : ?>
      <tr>
        <td><?= $artist['id']; ?></td>
        <td><?= $artist['name']; ?></td>
        <td><?= $artist['country']; ?></td>
        <td><?= $artist['year']; ?>
        <td><a href="edit_artist.php?id=<?= $artist['id']; ?>"><img src="img/edit.png" style="width: 15px; height: auto;"></a></td>
        <td><a href="delete_artist.php?id=<?= $artist['id']; ?>" onclick="return confirm('Weet je zeker dat je deze artiest wilt verwijderen?')"><img src="img/bin.png" style="width: 15px; height: auto;"></a></td>
      </tr>   
    <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>