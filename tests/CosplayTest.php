<?php

use App\cosplay\PokemonCostume;
use App\cosplay\PokemonFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class CosplayTestTest
 */
class CosplayTest extends TestCase
{
    public function test_可以生產寶可夢服裝()
    {
        $factory = new PokemonFactory();
        $costume = $factory->createCostume();

        static::assertInstanceOf(PokemonCostume::class, $costume);
    }
}
