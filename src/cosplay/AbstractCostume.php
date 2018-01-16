<?php

namespace App\cosplay;

use App\cosplay\part\Hat;
use App\cosplay\part\Helmet;
use App\cosplay\part\Cloth;
use App\cosplay\part\Shoe;
use App\cosplay\part\Weapon;

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
