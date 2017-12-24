<?php

use WillyWeatherAPI\Observations;

class testObservations extends PHPUnit_Framework_TestCase
{
    public function __construct()
    {
        $this->observations = new Observations();
        parent::__construct();
    }
    
    public function testGetWeatherObs()
    {
        $weather = $this->observations->getWeatherObs();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('observations', $weather);
    }

    public function testGetDewPoint()
    {
        $weather = $this->observations->getDewPoint();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('dew-point', $weather);
    }

    public function testGetRainfall()
    {
        $weather = $this->observations->getRainfall();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('rainfall', $weather);
    }

    public function testGetTemperature()
    {
        $weather = $this->observations->getTemperature();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('temperature', $weather);
    }

    public function testGetWind()
    {
        $weather = $this->observations->getWind();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('wind', $weather);
    }
}