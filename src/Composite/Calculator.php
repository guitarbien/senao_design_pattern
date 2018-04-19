<?php

declare(strict_types=1);

namespace App\Composite;

use App\Composite\Product\ProductInterface;

/**
 * Class Calculator
 * @package App\Composite
 */
final class Calculator implements ProductCalculateInterface
{
    /**
     * @param ProductInterface[] $products
     * @return int
     */
    public function calculateSum(array $products): int
    {
        return collect($products)->sum(function(ProductInterface $product) {
            return $product->getPrice();
        });
    }
}
