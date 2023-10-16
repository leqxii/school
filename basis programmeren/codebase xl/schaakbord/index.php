<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div class="chessboard">
        <?php
        for ($row = 8; $row >= 1; $row--) {
            for ($col = 0; $col < 8; $col++) {
                $isWhite = ($row + $col) % 2 == 0;
                $squareClass = $isWhite ? 'white' : 'black';
                echo "<div class='square $squareClass'></div>";
            }
        }
        ?>
    </div>
</body>

</html>