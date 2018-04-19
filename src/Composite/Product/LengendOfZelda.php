<?php

declare(strict_types=1);

namespace App\Composite\Product;

use App\Composite\ProductCalculateInterface;

/**
 * Class LengendOfZelda
 * @package App\Composite\Product
 */
final class LengendOfZelda implements ProductInterface
{
    /** @var ProductCalculateInterface */
    private $calculator;

    /**
     * MacBookPro constructor.
     * @param ProductCalculateInterface $calculator
     */
    public function __construct(ProductCalculateInterface $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->calculator->calculateSum([new PriceTag(2000)]);
    }
}
