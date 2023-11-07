<?php include_once 'core/bootstrap.php'; ?>
<?php
  if (empty($_GET['controller'])) {
    $_GET['controller'] = 'home';
  }

  $controller = $_GET['controller'];

  $content_file = 'content/' . $controller . '.php';
  if (file_exists($content_file)) {
    include($content_file);
    $function = $controller;
    $render = $function();
  } else {
    $render = '<p>Content not found.</p>';
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo cssLinks("css/"); ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>simpele URL-trigger functie</title>
  </head>
  <body>
    <nav>
      <a href="index.php?controller=home">Home</a>
      <a href="index.php?controller=gallery">Gallery</a> 
    </nav>
    <article>
      <?php echo $render; ?>
    </article>
  </body>
</html>
  