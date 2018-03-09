<?php

declare(strict_types=1);

use App\StatePattern\Color;
use App\StatePattern\GreenState;
use App\StatePattern\RedState;
use App\StatePattern\TrafficLightContext;
use App\StatePattern\YellowState;
use PHPUnit\Framework\TestCase;

/**
 * Class StateTest
 */
class StateTest extends TestCase
{
    public function test_紅綠燈號誌＿初始為綠燈()
    {
        // arrange
        $trafficLight = new TrafficLightContext();
        $trafficLight->setState(new GreenState());

        // act
        $state = $trafficLight->getState();

        // assert
        static::assertInstanceOf(GreenState::class, $state);
        static::assertTrue(Color::GREEN()->equals($state->getColor()));
    }

    public function test_紅綠燈號誌＿初始後變化一次為黃燈()
    {
        // arrange
        $trafficLight = new TrafficLightContext();
        $trafficLight->setState(new GreenState());

        // act
        $trafficLight->change();

        $state = $trafficLight->getState();

        // assert
        static::assertInstanceOf(YellowState::class, $state);
        static::assertTrue(Color::YELLOW()->equals($state->getColor()));
    }

    public function test_紅綠燈號誌＿初始後變化兩次為紅燈()
    {
        // arrange
        $trafficLight = new TrafficLightContext();
        $trafficLight->setState(new GreenState());

        // act
        $trafficLight->change();
        $trafficLight->change();

        $state = $trafficLight->getState();

        // assert
        static::assertInstanceOf(RedState::class, $state);
        static::assertTrue(Color::RED()->equals($state->getColor()));
    }

    public function test_紅綠燈號誌＿初始後變化三次為綠燈()
    {
        // arrange
        $trafficLight = new TrafficLightContext();
        $trafficLight->setState(new GreenState());

        // act
        $trafficLight->change();
        $trafficLight->change();
        $trafficLight->change();

        $state = $trafficLight->getState();

        // assert
        static::assertInstanceOf(GreenState::class, $state);
        static::assertTrue(Color::GREEN()->equals($state->getColor()));
    }

    public function test_紅綠燈號誌＿初始紅燈後變化三次為紅燈()
    {
        // arrange
        $trafficLight = new TrafficLightContext();
        $trafficLight->setState(new RedState());

        // act
        $trafficLight->change();
        $trafficLight->change();
        $trafficLight->change();

        $state = $trafficLight->getState();

        // assert
        static::assertInstanceOf(RedState::class, $state);
        static::assertTrue(Color::RED()->equals($state->getColor()));
    }
}
