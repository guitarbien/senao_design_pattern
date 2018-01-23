<?php

namespace App\Shopping;

/**
 * Class PercentOffPlan
 * @package App\Shopping
 */
class PercentOffPlan implements DiscountPlan
{
    /** @var int 折扣百分比 */
    private $percentage;

    /**
     * PercentOffPlan constructor.
     * @param int $percentage
     */
    public function __construct(int $percentage)
    {
        $this->percentage = $percentage;
    }

    /**
     * @param int $originalPrice
     * @return int
     */
    public function calculateTotalPrice(int $originalPrice): int
    {
        return $originalPrice * (100 - $this->percentage) / 100;
    }
}
