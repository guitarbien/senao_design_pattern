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

    /** @var ProductCalculateInterface */
    private $calculator;

    /**
     * Cart constructor.
     * @param ProductCalculateInterface $calculator
     */
    public function __construct(ProductCalculateInterface $calculator)
    {
        $this->calculator = $calculator;
    }

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
        return $this->calculator->calculateSum($this->products);
    }
}
