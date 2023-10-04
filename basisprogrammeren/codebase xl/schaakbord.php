<!DOCTYPE html>
<html>
<head>
    <style>
        .chessboard {
            width: 400px;
            height: 400px;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
        }

        .square {
            width: 50px;
            height: 50px;
            display: flex;
            background-color: #FFF;
            border: 1px solid #000;
        }

        .white {
            background-color: #FFF;
        }

        .black {
            background-color: #000;
        }
    </style>
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
