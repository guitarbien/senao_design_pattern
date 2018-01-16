<?php

namespace App\cosplay;

/**
 * Class AbstractCostumeFactory
 * @package App\cosplay
 */
abstract class AbstractCostumeFactory
{
    /**
     * @return AbstractCostume
     */
    abstract public function createCostume(): AbstractCostume;
}
