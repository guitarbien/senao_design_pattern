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
     * @param MinusHundredPlan $minusHundredPlan
     * @return Order
     */
    public function addDiscountPlan(MinusHundredPlan $minusHundredPlan): self
    {
        return $this;
    }
}
