<?php

namespace App\cosplay;

/**
 * Class PokemonFactory
 * @package App\cosplay
 */
class PokemonFactory
{
    /**
     * PokemonFactory constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return AbstractCostume
     */
    public function createCostume(): AbstractCostume
    {
        return new PokemonCostume();
    }
}
