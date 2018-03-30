<?php

declare(strict_types=1);

namespace App\Decorator;

/**
 * Class Order
 * @package App\Decorator
 */
final class Order
{
    /** @var int */
    private $totalPrice;

    /** @var array */
    private $events;

    /**
     * @return int
     */
    public function getTotalPrice(): int
    {
        return $this->totalPrice;
    }

    /**
     * @param int $totalPrice
     */
    public function setTotalPrice(int $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return array
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    /**
     * @param array $events
     */
    public function setEvents(array $events): void
    {
        $this->events = $events;
    }
}
