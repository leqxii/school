<?php
  /*
  * @param array $path
  * @return string
  * 
  */
  function bootstrap($path) {
    $phpFiles = glob($path . '/*.php');
  
    foreach ($phpFiles as $file) {
      include_once($file);
    }
  
      return true;
  }
  
  include("core/css.php");
  include("content/gallery.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo cssLinks("css"); ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap-function</title>
  </head>
  <body>
    <?php echo showPictures("img/"); ?>
  </body>
</html>
  