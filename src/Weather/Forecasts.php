<?php

namespace WillyWeatherAPI\Weather;

class Forecasts extends WeatherCollection
{
    public function reduceArray($array)
    {
        $array = array_values($array);

        $days = $array[0]['days'];
        $entries = array();
        foreach ($days as $day) {
            $entries[] = $day['entries'];
        }
    
        $entries = array_reduce($entries, 'array_merge', array());
        return $entries;
    }

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