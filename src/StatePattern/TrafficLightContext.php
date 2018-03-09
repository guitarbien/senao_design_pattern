<?php

declare(strict_types=1);

namespace App\StatePattern;

/**
 * Class TrafficLight
 * @package App\StatePattern
 */
final class TrafficLightContext
{
    /** @var State */
    private $state;

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }

    /**
     * @param State $state
     */
    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function change(): void
    {
        $this->setState($this->state->handle());
    }
}
