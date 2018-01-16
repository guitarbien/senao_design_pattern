<?php

namespace App\cosplay;

/**
 * Class WarcraftFactory
 * @package App\cosplay
 */
class WarcraftFactory extends AbstractCostumeFactory
{
    /**
     * @return AbstractCostume
     */
    public function createCostume(): AbstractCostume
    {
        return new WarcraftCostume();
    }
}
