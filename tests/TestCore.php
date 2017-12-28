<?php

use WillyWeatherAPI\WillyWeather;

class TestCore extends PHPUnit_Framework_TestCase
{
    /**
     * WillyWeather API Object
     * 
     * @var object
     */
    public $willyAPI;

    /**
     * Constructor
     * 
     */
    public function __construct()
    {
        $this->willyAPI = new WillyWeather([
            'apiKey' => '',
            'location' => 4955,
            'days' => 14
        ]);
        parent::__construct();
    }

    /**
     * Flag to test core function
     * 
     */
    public function testFlag()
    {
        $flag = true;
        $this->assertTrue($flag);
    }
}