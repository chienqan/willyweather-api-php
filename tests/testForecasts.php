<?php

use WillyWeatherAPI\Forecasts;

class testForecasts extends PHPUnit_Framework_TestCase
{
    public function __construct()
    {
        $this->forecasts = new Forecasts();
        parent::__construct();
    }

    public function testGetWind()
    {
        $weather = $this->forecasts->getWind();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('wind', $weather);
    }

    public function testGetRainfallProbability()
    {
        $weather = $this->forecasts->getRainfallProbability();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('rainfallprobability', $weather);
    }

    public function testGetRainfall()
    {
        $weather = $this->forecasts->getRainfall();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('rainfall', $weather);
    }

    public function testGetSunriseSunset()
    {
        $weather = $this->forecasts->getSunriseSunset();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('sunrisesunset', $weather);
    }

    public function testGetTemperature()
    {
        $weather = $this->forecasts->getTemperature();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('temperature', $weather);
    }

    public function testGetUV()
    {
        $weather = $this->forecasts->getUV();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('uv', $weather);
    }
}