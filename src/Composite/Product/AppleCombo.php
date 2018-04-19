<?php

declare(strict_types=1);

namespace App\Composite\Product;

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

    /**
     * AppleCombo constructor.
     */
    public function __construct()
    {
        $this->products[] = new MacBookPro();
        $this->products[] = new IPadAir();
        $this->products[] = new AppleWatch();
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
