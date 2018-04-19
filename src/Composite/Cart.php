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
    /** @var ProductInterface[] */
    private $products;

    /**
     * @param ProductInterface $product
     */
    public function addProduct(ProductInterface $product): void
    {
        $this->products[] = $product;
    }

    /**
     * @return int
     */
    public function calculate(): int
    {
        return collect($this->products)->sum(function(ProductInterface $product) {
            return $product->getPrice();
        });
    }
}
