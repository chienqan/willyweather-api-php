<?php

namespace WillyWeatherAPI\Weather;

use WillyWeatherAPI\WillyWeather;

class Observations extends WeatherCollection
{
    public function getWeatherObs()
    {
        return $this->willy->getObservational();
    }
    
    public function getDewPoint()
    {
        return $this->willy->getObservations("dew-point");
    }

    public function getRainfall()
    {
        return $this->willy->getObservations("rainfall");
    }

    public function getTemperature()
    {
        return $this->willy->getObservations("temperature");
    }

    public function getWind()
    {
        return $this->willy->getObservations("wind");
    }
}