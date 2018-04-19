<?php

declare(strict_types=1);

namespace App\Composite\Product;

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

    /**
     * AppleSwitchCombo constructor.
     */
    public function __construct()
    {
        $this->products[] = new AppleCombo();
        $this->products[] = new SwitchCombo();
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
