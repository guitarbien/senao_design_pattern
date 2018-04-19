<?php

declare(strict_types=1);

namespace App\Composite;

use App\Composite\Product\MacBookPro;

/**
 * Class Cart
 * @package App\Composite
 */
final class Cart
{
    /**
     * @param MacBookPro $product
     */
    public function addProduct(MacBookPro $product): void
    {
    }

    /**
     * @return int
     */
    public function calculate(): int
    {
        return 60000;
    }
}
