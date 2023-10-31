<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <title>Bestellingsoverzicht</title>
</head>
<body>
  <h1>Bestellingsoverzicht</h1>
  <h2>Je bestelling:</h2>

  <?php
    if (isset($_GET['bestelling'])) {
      $totalPrice = 0;

      if (isset($_GET['pizza'])) {
        foreach ($_GET['pizza'] as $selectedPizza) {
          if ($selectedPizza == 'margaritha') {
            $totalPrice += 8.99;
            echo 'Pizza Margaritha € 8,99<br>';
          } else if ($selectedPizza == 'pepperoni') {
            $totalPrice += 8.99;
            echo 'Pizza Perfect Pepperoni € 8,99<br>';
          } else if ($selectedPizza == 'salami') {
            $totalPrice += 9.49;
            echo 'Pizza Salami € 9,49<br>';
          } else if ($selectedPizza == 'funghi') {
            $totalPrice += 8.99;
            echo 'Pizza Funghi € 8,99<br>';
          } else if ($selectedPizza == 'shoarma') {
            $totalPrice += 13.49;
            echo 'Pizza Shawarma € 13,49<br>c';
          } else if ($selectedPizza == 'tonno') {
            $totalPrice += 14.49 ;
            echo 'Pizza Tonno € 14,49';
          }
        }
      }

      if (isset($_GET['extra'])) {
        foreach ($_GET['extra'] as $selectedExtra) {
          if ($selectedExtra == 'cheese') {
            $totalPrice += 2.00;
            echo 'Extra Cheese € 2,00<br>';
          } else if ($selectedExtra == 'olives') {
            $totalPrice += 3.00;
            echo 'Extra Olives € 3,00<br>';
          }
        }
      }

      echo '<h3>Totaalprijs:</h3>';
      echo '<p>€ ' . number_format($totalPrice, 2) . '</p>';
    } else {
      echo '<p>Je hebt nog geen bestelling geplaatst.</p>';
    }
  ?>

</body>
</html>
