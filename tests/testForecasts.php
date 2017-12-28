<?php

class TestForecasts extends TestCore
{
    public function testGetWind()
    {
        $weather = $this->willyAPI->forecasts->getWind();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('wind', $weather);
    }

    public function testGetRainfallProbability()
    {
        $weather = $this->willyAPI->forecasts->getRainfallProbability();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('rainfallprobability', $weather);
    }

    public function testGetRainfall()
    {
        $weather = $this->willyAPI->forecasts->getRainfall();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('rainfall', $weather);
    }

    public function testGetSunriseSunset()
    {
        $weather = $this->willyAPI->forecasts->getSunriseSunset();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('sunrisesunset', $weather);
    }

    public function testGetTemperature()
    {
        $weather = $this->willyAPI->forecasts->getTemperature();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('temperature', $weather);
    }

    public function testGetUV()
    {
        $weather = $this->willyAPI->forecasts->getUV();
        $this->assertNotEmpty($weather);
        $this->assertArrayHasKey('uv', $weather);
    }
}