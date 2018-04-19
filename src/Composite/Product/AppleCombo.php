<?php

declare(strict_types=1);

namespace App\Composite\Product;

use App\Composite\ProductCalculateInterface;

/**
 * Class AppleCombo
 * @package App\Composite\Product
 */
final class AppleCombo implements ProductInterface
{
    /** @var float 折扣 */
    const DISCOUNT_RATE = 0.9;

    /** @var ProductInterface[] */
    private $products;

    /** @var ProductCalculateInterface */
    private $calculator;

    /**
     * AppleCombo constructor.
     * @param ProductCalculateInterface $calculator
     */
    public function __construct(ProductCalculateInterface $calculator)
    {
        $this->calculator = $calculator;
        $this->products[] = new MacBookPro($calculator);
        $this->products[] = new IPadAir($calculator);
        $this->products[] = new AppleWatch($calculator);
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return (int)($this->calculator->calculateSum($this->products) * self::DISCOUNT_RATE);
    }
}
