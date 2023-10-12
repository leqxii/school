<?php include 'process_data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
</head>
<body>
    <h1>Het weer voor gebouw Groen</h1>
    <table>
        <tr class="table-header">
            <td>datum-tijd</td>
            <td>tijd</td>
            <td>temperatuur</td>
            <td>vochtigheid</td>
            <td>druk</td>
            <td>bewolking</td>
            <td>wind</td>
        </tr>
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <tr>
                <td><?php echo $dates[$i]; ?></td>
                <td><?php echo $times[$i]; ?></td>
                <td><?php echo $temperatures[$i]; ?> &deg;C</td>
                <td><?php echo $humidities[$i]; ?> %</td>
                <td><?php echo $pressures[$i]; ?> hPa</td>
                <td><?php echo $descriptions[$i]; ?></td>
                <td><?php echo $winds[$i]; ?> km/h</td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
