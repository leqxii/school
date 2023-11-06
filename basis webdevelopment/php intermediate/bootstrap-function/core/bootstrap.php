<?php
  function bootstrap() {
    $directory = 'core';

    $phpFiles = glob($directory . '/*.php');

    if ($phpFiles !== false) {
      foreach ($phpFiles as $filePath) {
        echo $filePath . "<br>";
        include_once $filePath;
      }
    } else {
      echo "Geen bestanden gevonden.";
    }
  }

  bootstrap();
