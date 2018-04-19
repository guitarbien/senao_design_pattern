<?php

declare(strict_types=1);

namespace App\Composite;

use App\Composite\Product\ProductInterface;

/**
 * Class Cart
 * @package App\Composite
 */
final class Cart
{
    /** @var ProductInterface */
    private $product;

    /**
     * @param ProductInterface $product
     */
    public function addProduct(ProductInterface $product): void
    {
        $this->product = $product;
    }

    /**
     * @return int
     */
    public function calculate(): int
    {
        return $this->product->getPrice();
    }
}
