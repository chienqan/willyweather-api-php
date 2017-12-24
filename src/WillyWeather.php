<?php

namespace WillyWeatherAPI;

use WillyWeather\Client;

abstract class WillyWeather
{
    /**
     * willyweather-php package
     * 
     */
    protected $willy;

    /**
     * the location code
     * 
     */
    protected $location = 4955;

    /**
     * the number of days
     * 
     */
    protected $days = 14;

    /**
     * Constructor
     * 
     */
    public function __construct($apiKey)
    {
        $client = new Client($apiKey);
        $this->willy = $client->location($this->locaiton);
    }

    /**
     * Get forecasts
     * @param type Type of the forecasts
     * 
     */
    public function getForecasts(string $type)
    {
        return $this->willy->getForecasts(["forecasts" => [$type], "days" => $this->days]);
    }

    /**
     * Get observations
     * @param type Type of the observations
     * 
     */
    public function getObservations(string $type)
    {
        return $this->willy->getObservationalGraphs(["observationalGraphs" => [$type], "days" => $this->days]);
    }

    /**
     * Get weather obervational
     * 
     */
    public function getObservational()
    {
        return $this->willy->getObservational();
    }
    
}