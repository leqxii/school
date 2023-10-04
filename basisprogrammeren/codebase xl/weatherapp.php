<?php
require 'weatherapp_api.php';

$latitude = 52.520899;
$longitude = 6.081883;

$url = "https://api.openweathermap.org/data/2.5/forecast?lat=$latitude&lon=$longitude&appid=$api_key";

//$response = file_get_contents($url);

//if ($response === false) {
//    die('Failed to fetch data from OpenWeatherMap API');
}

//$data = json_decode($response, true);

//if ($data === null) {
    //die('Failed to decode JSON data from OpenWeatherMap API');
}

// if (isset($data['list'][0])) {
//    $temperature = $data['list'][0]['main']['temp'];
} //else {
//    die('Data from OpenWeatherMap API does not contain the expected structure.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
</head>
<body>
    <h1>Het weer voor gebouw Groen</h1>
    <p>Temperature: <?php echo $temperature; ?> &deg;K</p>
</body>
</html>