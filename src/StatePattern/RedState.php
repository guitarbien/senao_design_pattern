<?php

declare(strict_types=1);

namespace App\StatePattern;

/**
 * Class RedState
 * @package App\StatePattern
 */
final class RedState implements State
{
    /**
     * @return mixed
     */
    public function handle(): State
    {
        return new GreenState();
    }

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return Color::RED();
    }
}
