<?php

declare(strict_types=1);

namespace App\StatePattern;

/**
 * Class TrafficLight
 * @package App\StatePattern
 */
final class TrafficLight
{
    /**
     * @return State
     */
    public function getState(): State
    {
        return State::GREEN();
    }
}
