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
