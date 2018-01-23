<?php

namespace App\Shopping;

/**
 * Interface DiscountPlan
 * @package App\Shopping
 */
interface DiscountPlan
{
    /**
     * @param int $originalPrice
     * @return int
     */
    public function calculateTotalPrice(int $originalPrice): int;
}
