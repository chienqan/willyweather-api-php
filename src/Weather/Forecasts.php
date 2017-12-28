<?php

namespace WillyWeatherAPI\Weather;

class Forecasts extends WeatherCollection
{
    public function getWind()
    {
        return $this->willy->getForecasts("wind");
    }

    public function getRainfallProbability()
    {
        return $this->willy->getForecasts("rainfallprobability");
    }

    public function getRainfall()
    {
        return $this->willy->getForecasts("rainfall");
    }

    public function getSunriseSunset()
    {
        return $this->willy->getForecasts("sunrisesunset");
    }

    public function getTemperature()
    {
        return $this->willy->getForecasts("temperature");
    }

    public function getUV()
    {
        return $this->willy->getForecasts("uv");
    }
}