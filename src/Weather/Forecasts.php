<?php

namespace WillyWeatherAPI\Weather;

class Forecasts extends WeatherCollection
{
    public function reduceArray($array)
    {
        $array = array_values($array);

        $days = $array[0]['days'];

        $listData = array();
        foreach ($days as $day) {
            $data = array();
            
            if (isset($day['dateTime'])) {
                $data['dateTime'] = $day['dateTime'];
            }
            
            $data['entries'] = array_reduce($day['entries'], 'array_merge', array());;

            $listData[] = $data;
        }

        return $listData;
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
