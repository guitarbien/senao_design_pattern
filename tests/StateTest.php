<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\StatePattern\TrafficLight;
use App\StatePattern\Color;

/**
 * Class StateTest
 */
class StateTest extends TestCase
{
    public function test_紅綠燈號誌＿初始為綠燈()
    {
        // arrange
        $trafficLight = new TrafficLight();

        // act
        $status = $trafficLight->getState();

        // assert
        static::assertEquals($status, new Color(Color::GREEN));
    }

    public function test_紅綠燈號誌＿初始後變化一次為黃燈()
    {
        // arrange
        $trafficLight = new TrafficLight();

        // act
        $trafficLight->change();

        $status = $trafficLight->getState();

        // assert
        static::assertEquals($status, new Color(Color::YELLOW));
    }

    public function test_紅綠燈號誌＿初始後變化兩次為紅燈()
    {
        // arrange
        $trafficLight = new TrafficLight();

        // act
        $trafficLight->change();
        $trafficLight->change();

        $status = $trafficLight->getState();

        // assert
        static::assertEquals($status, new Color(Color::RED));
    }

    public function test_紅綠燈號誌＿初始後變化三次為綠燈()
    {
        // arrange
        $trafficLight = new TrafficLight();

        // act
        $trafficLight->change();
        $trafficLight->change();
        $trafficLight->change();

        $status = $trafficLight->getState();

        // assert
        static::assertEquals($status, new Color(Color::GREEN));
    }
}
