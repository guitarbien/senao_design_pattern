<?php

namespace App\Shopping;

/**
 * Class Order
 * @package App\Shopping
 */
class Order
{
    /** @var DiscountPlan */
    private $plan;

    /**
     * @param Product $product
     * @param int $int
     * @return Order
     */
    public function addItem(Product $product, int $int = 1): self
    {
        return $this;
    }

    /**
     * @param DiscountPlan $plan
     * @return Order
     */
    public function addDiscountPlan(DiscountPlan $plan): self
    {
        $this->plan = $plan;
        return $this;
    }

    /**
     * @return int
     */
    public function calculateTotalPrice(): int
    {
        $originalPrice = $this->calculateOriginalPrice();
        return $this->plan->calculateTotalPrice($originalPrice);
    }

    /**
     * @return int
     */
    private function calculateOriginalPrice(): int
    {
        return 1;
    }
}
