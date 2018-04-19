<?php

declare(strict_types=1);

namespace App\Composite\Product;

use App\Composite\ProductCalculateInterface;

/**
 * Class SwitchCombo
 * @package App\Composite\Product
 */
final class SwitchCombo implements ProductInterface
{
    /** @var float 折扣率 */
    const DISCOUNT_RATE = 0.9;

    /** @var ProductInterface[] */
    private $products;

    /** @var ProductCalculateInterface */
    private $calculator;

    /**
     * SwitchCombo constructor.
     * @param ProductCalculateInterface $calculator
     */
    public function __construct(ProductCalculateInterface $calculator)
    {
        $this->calculator = $calculator;
        $this->products[] = new NintendoSwitch($calculator);
        $this->products[] = new LengendOfZelda($calculator);
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return (int)(collect($this->products)->sum(function(ProductInterface $product) {
            return $product->getPrice();
        }) * self::DISCOUNT_RATE);
    }
}
