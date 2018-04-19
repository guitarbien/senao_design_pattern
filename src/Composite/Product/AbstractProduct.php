<?php

declare(strict_types=1);

namespace App\Composite\Product;

use App\Composite\ProductCalculateInterface;

/**
 * Class AbstractProduct
 * @package App\Composite\Product
 */
abstract class AbstractProduct implements ProductInterface
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
     * @return ProductCalculateInterface
     */
    protected function getCalculator(): ProductCalculateInterface
    {
        return $this->calculator;
    }

    /**
     * @return int
     */
    abstract public function getPrice(): int;
}
