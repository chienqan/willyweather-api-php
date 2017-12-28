<?php
include('../vendor/autoload.php');

use WillyWeatherAPI\WillyWeather;


//////// CONFIG ///////
$config = array(
    'apiKey' => '',
    'location' => 4955,
    'days' => 14
);
//////////////////////

$willyWeather = new WillyWeather($config);

$response = $willyWeather->observations->getWind();

print_r($response);