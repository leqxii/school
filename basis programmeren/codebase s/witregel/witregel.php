<?php
for ($i = 1; $i <= 100; $i++) {
    $randomNumber = rand(1, 100);

    echo $randomNumber;

    echo "\n";

    if ($i % 3 == 0) {
        echo "\n";
    }
}
?>
