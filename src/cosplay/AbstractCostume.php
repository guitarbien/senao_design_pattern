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
    /** @var Hat */
    private $hat;

    /** @var Helmet */
    private $helmet;

    /** @var Cloth */
    private $cloth;

    /** @var Shoe */
    private $shoe;

    /** @var Weapon */
    private $weapon;

    /**
     * AbstractCostume constructor.
     */
    public function __construct()
    {
        $this->hat    = $this->createHat();
        $this->helmet = $this->createHelmet();
        $this->cloth  = $this->createCloth();
        $this->shoe   = $this->createShoe();
        $this->weapon = $this->createWeapon();
    }

    /**
     * @return Hat
     */
    public function getHat(): Hat
    {
        return $this->hat;
    }

    /**
     * @return Helmet
     */
    public function getHelmet(): Helmet
    {
        return $this->helmet;
    }

    /**
     * @return Cloth
     */
    public function getCloth(): Cloth
    {
        return $this->cloth;
    }

    /**
     * @return Shoe
     */
    public function getShoe(): Shoe
    {
        return $this->shoe;
    }

    /**
     * @return Weapon
     */
    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }

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
