<?php

declare(strict_types=1);

namespace App\StatePattern;

/**
 * Class TrafficLight
 * @package App\StatePattern
 */
final class TrafficLight
{
    /** @var State */
    private $state;

    /**
     * TrafficLight constructor.
     */
    public function __construct()
    {
        $this->state = State::GREEN();
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }

    public function change(): void
    {
        $this->state = State::YELLOW();

        // 紅燈才可以變綠燈
        if ($this->state->equals(State::RED())) {
            $this->state = State::GREEN();
            return;
        }
    }
}
