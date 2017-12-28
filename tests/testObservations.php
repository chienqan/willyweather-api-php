<?php

class TestObservations extends TestCore
{
    public function testGetWeatherObs()
    {
        $weather = $this->willyAPI->observations->getWeatherObs();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('observations', $weather);
    }

    public function testGetDewPoint()
    {
        $weather = $this->willyAPI->observations->getDewPoint();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('dew-point', $weather);
    }

    public function testGetRainfall()
    {
        $weather = $this->willyAPI->observations->getRainfall();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('rainfall', $weather);
    }

    public function testGetTemperature()
    {
        $weather = $this->willyAPI->observations->getTemperature();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('temperature', $weather);
    }

    public function testGetWind()
    {
        $weather = $this->willyAPI->observations->getWind();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('wind', $weather);
    }
}