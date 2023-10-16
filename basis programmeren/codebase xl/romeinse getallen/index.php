<?php
function intToRoman($num)
{
    $values = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];

    $romanNumerals = [
        'M',
        'CM',
        'D',
        'CD',
        'C',
        'XC',
        'L',
        'XL',
        'X',
        'IX',
        'V',
        'IV',
        'I',
    ];

    $result = '';
    for ($i = 0; $i < count($values); $i++) {
        while ($num >= $values[$i]) {
            $result .= $romanNumerals[$i];
            $num -= $values[$i];
        }
    }

    return $result;
}

function romanToInt($roman)
{
    $romanNumerals = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    $num = 0;
    $i = 0;
    while ($i < strlen($roman)) {
        if (
            $i + 1 < strlen($roman) &&
            isset($romanNumerals[$roman[$i] . $roman[$i + 1]])
        ) {
            $num += $romanNumerals[$roman[$i] . $roman[$i + 1]];
            $i += 2;
        } else {
            $num += $romanNumerals[$roman[$i]];
            $i++;
        }
    }

    return $num;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Romeinse en Decimale Converter</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="input">Voer een getal of Romeins getal in:</label>
        <input type="text" name="input" id="input">
        <input type="submit" value="Converteer">
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];

        if (is_numeric($input)) {
            $result = intToRoman($input);
            echo "Romeins getal: $result";
        } else {
            $result = romanToInt(strtoupper($input));
            echo "Decimaal getal: $result";
        }
    }
?>
</body>
</html>
