<?php

namespace App\Shopping;

/**
 * Class PercentOffPlan
 * @package App\Shopping
 */
class PercentOffPlan implements DiscountPlan
{
    /**
     * @param int $originalPrice
     * @return int
     */
    public function calculateTotalPrice(int $originalPrice): int
    {
        return $originalPrice;
    }
}
