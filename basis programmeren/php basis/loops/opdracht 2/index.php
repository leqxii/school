<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
  <style>
    img {
      width: 250px;
      padding-right: 10px;
    }
  </style>
</head>
<body>
  <?php
    for ($i = 1; $i <= 5; $i++) {
      $imageName = "img/afb" . $i . ".jpg";
      echo '<img src="' . $imageName . '" alt="Afbeelding ' . $i . '">';
    }
  ?>
</body>
</html>
