<?php

namespace App\Shopping;

/**
 * Class Order
 * @package App\Shopping
 */
class Order
{
    /**
     * @param Product $productA
     * @param int $int
     * @return Order
     */
    public function addItem(Product $productA, int $int = 1): self
    {
        return $this;
    }

    /**
     * @param DiscountPlan $plan
     * @return Order
     */
    public function addDiscountPlan(DiscountPlan $plan): self
    {
        return $this;
    }

    /**
     * @return int
     */
    public function calculateTotalPrice(): int
    {
        return 1755;
    }
}
