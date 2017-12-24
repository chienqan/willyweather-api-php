<?php

namespace WillyWeatherAPI;

use WillyWeatherAPI\WillyWeather;

class Forecasts extends WillyWeather
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getWind()
    {
        return $this->getForecasts("wind");
    }

    public function getRainfallProbability()
    {
        return $this->getForecasts("rainfallprobability");
    }

    public function getRainfall()
    {
        return $this->getForecasts("rainfall");
    }

    public function getSunriseSunset()
    {
        return $this->getForecasts("sunrisesunset");
    }

    public function getTemperature()
    {
        return $this->getForecasts("temperature");
    }

    public function getUV()
    {
        return $this->getForecasts("uv");
    }
}