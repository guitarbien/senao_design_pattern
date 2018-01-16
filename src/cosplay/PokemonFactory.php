<?php

namespace App\cosplay;

/**
 * Class PokemonFactory
 * @package App\cosplay
 */
class PokemonFactory extends AbstractCostumeFactory
{
    /**
     * @return AbstractCostume
     */
    public function createCostume(): AbstractCostume
    {
        return new PokemonCostume();
    }
}
