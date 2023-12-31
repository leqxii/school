<?php include_once 'core/bootstrap.php'; ?>
<?php
  if (empty($_GET['controller'])) {
    $_GET['controller'] = 'home';
  }

  $validControllers = ['home', 'gallery'];
  $controller = $_GET['controller'];

  if (in_array($controller, $validControllers)) {
    include('content/' . $controller . '.php');
  } else {
    echo '<p>Page not found</p>';
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
      <?php
        if (function_exists($controller)) {
          $controller();
        }
      ?>
    </article>
  </body>
</html>
  