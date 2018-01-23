<?php

namespace App\Shopping;

/**
 * Class MinusHundredPlan
 * @package App\Shopping
 */
class MinusHundredPlan implements DiscountPlan
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
