<?php

declare(strict_types=1);

namespace App\Composite\Product;

use App\Composite\ProductCalculateInterface;

/**
 * Class AppleSwitchCombo
 * @package App\Composite\Product
 */
final class AppleSwitchCombo implements ProductInterface
{
    /** @var int 折扣金額 */
    const DISCOUNT_PRICE = 1000;

    /** @var ProductInterface[] */
    private $products;

    /** @var ProductCalculateInterface */
    private $calculator;

    /**
     * AppleSwitchCombo constructor.
     */
    public function __construct(ProductCalculateInterface $calculator)
    {
        $this->calculator = $calculator;
        $this->products[] = new AppleCombo($calculator);
        $this->products[] = new SwitchCombo($calculator);
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return collect($this->products)->sum(function(ProductInterface $product) {
            return $product->getPrice();
        }) - self::DISCOUNT_PRICE;
    }
}
