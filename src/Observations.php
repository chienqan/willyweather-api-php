<?php

namespace WillyWeatherAPI;

use WillyWeatherAPI\WillyWeather;

class Observations extends WillyWeather
{
    public function getWeatherObs()
    {
        return $this->getObservational();
    }
    
    public function getDewPoint()
    {
        return $this->getObservations("dew-point");
    }

    public function getRainfall()
    {
        return $this->getObservations("rainfall");
    }

    public function getTemperature()
    {
        return $this->getObservations("temperature");
    }

    public function getWind()
    {
        return $this->getObservations("wind");
    }
}