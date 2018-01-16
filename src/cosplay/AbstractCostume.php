<?php

namespace App\cosplay;

use App\cosplay\part\definition\Hat;
use App\cosplay\part\definition\Helmet;
use App\cosplay\part\definition\Cloth;
use App\cosplay\part\definition\Shoe;
use App\cosplay\part\definition\Weapon;

/**
 * Class AbstractCostume
 * @package App\cosplay
 */
abstract class AbstractCostume
{
    /**
     * @return Hat
     */
    abstract protected function createHat(): Hat;

    /**
     * @return Helmet
     */
    abstract protected function createHelmet(): Helmet;

    /**
     * @return Cloth
     */
    abstract protected function createCloth(): Cloth;

    /**
     * @return Shoe
     */
    abstract protected function createShoe(): Shoe;

    /**
     * @return Weapon
     */
    abstract protected function createWeapon(): Weapon;
}
