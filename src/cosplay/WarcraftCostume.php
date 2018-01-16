<?php

namespace App\cosplay;

use App\cosplay\part\definition\Cloth;
use App\cosplay\part\definition\Hat;
use App\cosplay\part\definition\Helmet;
use App\cosplay\part\definition\Shoe;
use App\cosplay\part\definition\Weapon;
use App\cosplay\part\concrete\JapaneseArmour;
use App\cosplay\part\concrete\TopHat;
use App\cosplay\part\concrete\SamuraiHelmet;
use App\cosplay\part\concrete\RainBoots;
use App\cosplay\part\concrete\AK47;

/**
 * Class WarcraftCostume
 * @package App\cosplay
 */
class WarcraftCostume extends AbstractCostume
{
    /**
     * @return TopHat
     */
    protected function createHat(): Hat
    {
        return new TopHat;
    }

    /**
     * @return SamuraiHelmet
     */
    protected function createHelmet(): Helmet
    {
        return new SamuraiHelmet();
    }

    /**
     * @return JapaneseArmour
     */
    protected function createCloth(): Cloth
    {
        return new JapaneseArmour();
    }

    /**
     * @return RainBoots
     */
    protected function createShoe(): Shoe
    {
        return new RainBoots();
    }

    /**
     * @return AK47
     */
    protected function createWeapon(): Weapon
    {
        return new AK47();
    }
}
