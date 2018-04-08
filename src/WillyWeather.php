<?php

namespace WillyWeatherAPI;

use WillyWeather\Client;

class WillyWeather
{
    /**
     * willyweather-php package
     *
     * @access protected 
     */
    protected $willyWeatherPHP;

    /**
     * the api key of Willy Weather
     * 
     * @var string
     */
    protected $apiKey;

    /**
     * the location code
     *
     * @var integer
     */
    protected $location;

    /**
     * the number of days
     * 
     * @var integer
     */
    protected $days;

    /** @var Weather\Observations Collection of Observations related functions. */
    public $forecasts;

    /** @var Weather\Observations Collection of Observations related functions. */
    public $observations;

    /**
     * Constructor
     * 
     */
    public function __construct(array $config = [])
    {
        $this->location = isset($config['location']) ? $config['location'] : 4955;
        $this->days = isset($config['days']) ? $config['days'] : 14;
        $this->apiKey = isset($config['apiKey']) ? $config['apiKey'] : '';
        $this->willyWeatherPHP = (new Client($this->apiKey))->location($this->location);
        $this->forecasts = new Weather\Forecasts($this);
        $this->observations = new Weather\Observations($this);
    }

    /**
     * refresh instance of willy weather php
     *
     * @return void
     */
    public function refreshInstance()
    {
        $this->willyWeatherPHP = (new Client($this->apiKey))->location($this->location);
    }

    /**
     * Get forecasts
     * @param type Type of the forecasts
     * 
     */
    public function getForecasts(string $type)
    {
        $this->refreshInstance();
        return $this->willyWeatherPHP->getForecasts(["forecasts" => [$type], "days" => $this->days]);
    }
    
    /**
     * Get observations
     * @param type Type of the observations
     * 
     */
    public function getObservations(string $type)
    {
        $this->refreshInstance();
        return $this->willyWeatherPHP->getObservationalGraphs(["observationalGraphs" => [$type], "days" => $this->days]);
    }

    /**
     * Get weather obervational
     * 
     */
    public function getObservational()
    {
        $this->refreshInstance();
        return $this->willyWeatherPHP->getObservational();
    }
    
}