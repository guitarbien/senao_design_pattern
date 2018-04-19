<?php

declare(strict_types=1);

namespace App\Composite;

use App\Composite\Product\ProductInterface;

/**
 * Interface ProductCalculateInterface
 * @package App\Composite
 */
interface ProductCalculateInterface
{
    /**
     * @param ProductInterface[] $products
     * @return int
     */
    public function calculateSum(array $products): int;
}
