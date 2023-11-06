<?php
  /*
  * @param array $map
  * @return string
  *
  */
  function showPictures($path) {
    $imagePaths = glob($path . '*.jpg');

    $html = '<div class="image-container">';

    foreach ($imagePaths as $imagePath) {
        $html .= '<img class="image-class" src="' . $imagePath . '" alt="image ' . basename($imagePath) . '">';
    }

    $html .= '</div>';

    return $html;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image Gallery</title>
</head>
<body>
    <h1><b>Responsive</b> image gallery</h1>
    <?php echo showPictures("img/"); ?>
</body>
</html>