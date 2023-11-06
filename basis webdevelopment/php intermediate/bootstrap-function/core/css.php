<?php
  /*
  * @param array $path
  * @return string
  * 
  */
  function cssLinks($path) {
    $cssFiles = [];

    $cssFiles = glob($path . '/*.css');
 
    $html = '';
 
    foreach ($cssFiles as $cssFile) {
      $html .= '<link rel="stylesheet" href="' . $cssFile . '">';
    }
 
    return $html;   
  }
?>
