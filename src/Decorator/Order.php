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

    /** @var int */
    private $coupon;

    /** @var bool */
    private $plusOneEvent;

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
     * @return int
     */
    public function getCoupon(): int
    {
        return $this->coupon;
    }

    /**
     * @param int $coupon
     */
    public function setCoupon(int $coupon): void
    {
        $this->coupon = $coupon;
    }

    /**
     * @return bool
     */
    public function isPlusOneEvent(): bool
    {
        return $this->plusOneEvent;
    }

    /**
     * @param bool $plusOneEvent
     */
    public function setPlusOneEvent(bool $plusOneEvent): void
    {
        $this->plusOneEvent = $plusOneEvent;
    }
}
