<?php

declare(strict_types=1);

namespace App\Decorator\Events;

/**
 * Class Coupon
 * @package App\Decorator\Events
 */
final class Coupon
{
    /** @var int */
    private $couponPrice;

    /**
     * Coupon constructor.
     * @param int $couponPrice
     */
    public function __construct(int $couponPrice)
    {
        $this->couponPrice = $couponPrice;
    }
}
