<?php

declare(strict_types=1);

namespace App\StatePattern;

/**
 * Class TrafficLight
 * @package App\StatePattern
 */
final class TrafficLight
{
    /** @var Color */
    private $state;

    /**
     * TrafficLight constructor.
     */
    public function __construct()
    {
        $this->state = Color::GREEN();
    }

    /**
     * @return Color
     */
    public function getState(): Color
    {
        return $this->state;
    }

    public function change(): void
    {
        // 綠燈才可以變黃燈
        if ($this->state->equals(Color::GREEN())) {
            $this->state = Color::YELLOW();
            return;
        }

        // 黃燈才可以變紅燈
        if ($this->state->equals(Color::YELLOW())) {
            $this->state = Color::RED();
            return;
        }

        // 紅燈才可以變綠燈
        if ($this->state->equals(Color::RED())) {
            $this->state = Color::GREEN();
            return;
        }
    }
}
