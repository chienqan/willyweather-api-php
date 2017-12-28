<?php

namespace WillyWeatherAPI\Weather;

use WillyWeatherAPI\WillyWeather;

class WeatherCollection
{
    /**
     * @var WillyWeather The parent class instance we belong to
     */
    public $willy;

    /**
     * Constructor
     * 
     */
    public function __construct($parent)
    {
        $this->willy = $parent;
    }
}