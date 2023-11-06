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
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo cssLinks("css"); ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CSS-link function</title>
  </head>
  <body>
    <h1>CSS-link function</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
      est laborum.
    </p>
  </body>
</html>
