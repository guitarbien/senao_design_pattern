<?php

use App\cosplay\AbstractCostume;
use App\cosplay\part\definition\Cloth;
use App\cosplay\part\definition\Hat;
use App\cosplay\part\definition\Helmet;
use App\cosplay\part\definition\Shoe;
use App\cosplay\part\definition\Weapon;
use App\cosplay\PokemonFactory;
use App\cosplay\WarcraftFactory;
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

        static::assertInstanceOf(AbstractCostume::class, $costume);
        static::assertInstanceOf(Hat::class, $costume->getHat());
        static::assertInstanceOf(Helmet::class, $costume->getHelmet());
        static::assertInstanceOf(Cloth::class, $costume->getCloth());
        static::assertInstanceOf(Shoe::class, $costume->getShoe());
        static::assertInstanceOf(Weapon::class, $costume->getWeapon());
    }

    public function test_可以生產魔獸爭霸服裝()
    {
        $factory = new WarcraftFactory();
        $costume = $factory->createCostume();

        static::assertInstanceOf(AbstractCostume::class, $costume);
        static::assertInstanceOf(Hat::class, $costume->getHat());
        static::assertInstanceOf(Helmet::class, $costume->getHelmet());
        static::assertInstanceOf(Cloth::class, $costume->getCloth());
        static::assertInstanceOf(Shoe::class, $costume->getShoe());
        static::assertInstanceOf(Weapon::class, $costume->getWeapon());
    }
}
