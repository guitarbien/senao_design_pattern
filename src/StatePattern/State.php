<?php

declare(strict_types=1);

namespace App\StatePattern;

/**
 * Interface State
 * @package App\StatePattern
 */
interface State
{
    /**
     * @return mixed
     */
    public function handle(): State;

    /**
     * @return Color
     */
    public function getColor(): Color;
}
