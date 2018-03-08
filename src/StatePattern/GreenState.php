<?php

declare(strict_types=1);

namespace App\StatePattern;

/**
 * Class GreenState
 * @package App\StatePattern
 */
final class GreenState implements State
{
    /**
     * @return mixed
     */
    public function handle(): State
    {
        return new YellowState();
    }

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return Color::GREEN();
    }
}
