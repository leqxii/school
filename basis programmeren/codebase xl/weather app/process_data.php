<?php
require 'docs/api-key.php';

$latitude = 52.520899;
$longitude = 6.081883;

$url = "https://api.openweathermap.org/data/2.5/forecast?lat=$latitude&lon=$longitude&appid=$api_key";

$response = file_get_contents($url);

if ($response === false) {
    die('Failed to fetch data from OpenWeatherMap API');
}

$data = json_decode($response, true);

if ($data === null) {
    die('Failed to decode JSON data from OpenWeatherMap API');
}

if (isset($data['list'])) {
    $weatherData = $data['list'];
}

$dates = array();
$times = array();
$temperatures = array();
$humidities = array();
$pressures = array();
$descriptions = array();
$winds = array();

for ($i = 0; $i < 5; $i++) {
    $weatherEntry = $weatherData[$i];
    $timestamp = strtotime($weatherEntry['dt_txt']);
    $dates[] = date('Y-m-d', $timestamp);
    $times[] = date('H:i', $timestamp);
    $temperatures[] = $weatherEntry['main']['temp'] - 273;
    $humidities[] = $weatherEntry['main']['humidity'];
    $pressures[] = $weatherEntry['main']['pressure'];
    $descriptions[] = $weatherEntry['weather'][0]['description'];
    $icon = $weatherEntry['weather'][0]['icon'];
    $winds[] = $weatherEntry['wind']['speed'];
    $windDirection = $weatherEntry['wind']['deg'];
}
?>