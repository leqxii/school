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
  <title>Document</title>
</head>
<body>
  <div class="row">
    <div class="column">
      <h2>Table</h2>
      <table>
        <thead>
          <th>ID</th>
          <th>Name</th>
          <th>Country</th>
        </thead>
        <tbody>
          <?php foreach ($artists as $artist) : ?>
            <tr>
              <td><?= $artist['id']; ?></td>
              <td><?= $artist['name']; ?></td>
              <td><?= $artist['country']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="column">
      <h2>Add Artist</h2>
      <form action="add_artist.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required>

        <input type="submit" value="Add Artist">
      </form>
    </div>
  </div>
</body>
</html>