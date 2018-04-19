<?php

declare(strict_types=1);

namespace App\Composite\Product;

use App\Composite\ProductCalculateInterface;

/**
 * Class AppleSwitchCombo
 * @package App\Composite\Product
 */
final class AppleSwitchCombo extends AbstractProduct
{
    /** @var int 折扣金額 */
    const DISCOUNT_PRICE = 1000;

    /** @var ProductInterface[] */
    private $products;

    /**
     * AppleSwitchCombo constructor.
     */
    public function __construct(ProductCalculateInterface $calculator)
    {
        parent::__construct($calculator);

        $this->products[] = new AppleCombo($calculator);
        $this->products[] = new SwitchCombo($calculator);
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->getCalculator()->calculateSum($this->products) - self::DISCOUNT_PRICE;
    }
}
