<?php

namespace App\Shopping;

use Illuminate\Support\Collection;

/**
 * Class Order
 * @package App\Shopping
 */
class Order
{
    /** @var DiscountPlan */
    private $plan;

    /** @var Product[] */
    private $productList = [];

    /**
     * @param Product $product
     * @param int $int
     * @return Order
     */
    public function addItem(Product $product, int $int = 1): self
    {
        Collection::times($int, function() use($product) {
            $this->productList[] = $product;
        });

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
        return collect($this->productList)->sum(function(Product $item) {
            return $item->getPrice();
        });
    }
}
