<?php

namespace App\cosplay;

use App\cosplay\part\definition\Cloth;
use App\cosplay\part\definition\Hat;
use App\cosplay\part\definition\Helmet;
use App\cosplay\part\definition\Shoe;
use App\cosplay\part\definition\Weapon;
use App\cosplay\part\concrete\Armor;
use App\cosplay\part\concrete\BaseballHat;
use App\cosplay\part\concrete\VikingHelmet;
use App\cosplay\part\concrete\Boots;
use App\cosplay\part\concrete\Sword;

/**
 * Class PokemonCostume
 * @package App\cosplay
 */
class PokemonCostume extends AbstractCostume
{
    /**
     * @return Hat
     */
    protected function createHat(): Hat
    {
        return new BaseballHat();
    }

    /**
     * @return Helmet
     */
    protected function createHelmet(): Helmet
    {
        return new VikingHelmet();
    }

    /**
     * @return Cloth
     */
    protected function createCloth(): Cloth
    {
        return new Armor();
    }

    /**
     * @return Shoe
     */
    protected function createShoe(): Shoe
    {
        return new Boots();
    }

    /**
     * @return Weapon
     */
    protected function createWeapon(): Weapon
    {
        return new Sword();
    }
}