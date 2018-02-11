<?php

namespace WillyWeatherAPI\Weather;

use WillyWeatherAPI\WillyWeather;

class Observations extends WeatherCollection
{
    public function reduceArray($array)
    {
        $array = array_values($array);
        return $array[0]['dataConfig']['series']['groups'][0];
    }
    
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