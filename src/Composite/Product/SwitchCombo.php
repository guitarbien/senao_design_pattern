<?php

declare(strict_types=1);

namespace App\Composite\Product;

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

    /**
     * SwitchCombo constructor.
     */
    public function __construct()
    {
        $this->products[] = new NintendoSwitch();
        $this->products[] = new LengendOfZelda();
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
