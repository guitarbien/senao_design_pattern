<?php

declare(strict_types=1);

namespace App\StatePattern;

/**
 * Class YellowState
 * @package App\StatePattern
 */
final class YellowState implements State
{
    /**
     * @return mixed
     */
    public function handle(): State
    {
        return new RedState();
    }

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return Color::YELLOW();
    }
}
