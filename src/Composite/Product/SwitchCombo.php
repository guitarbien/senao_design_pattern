<?php

declare(strict_types=1);

namespace App\Composite\Product;

use App\Composite\ProductCalculateInterface;

/**
 * Class SwitchCombo
 * @package App\Composite\Product
 */
final class SwitchCombo extends AbstractProduct
{
    /** @var float 折扣率 */
    const DISCOUNT_RATE = 0.9;

    /** @var ProductInterface[] */
    private $products;

    /**
     * SwitchCombo constructor.
     * @param ProductCalculateInterface $calculator
     */
    public function __construct(ProductCalculateInterface $calculator)
    {
        parent::__construct($calculator);

        $this->products[] = new NintendoSwitch($calculator);
        $this->products[] = new LegendOfZelda($calculator);
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return (int)($this->getCalculator()->calculateSum($this->products) * self::DISCOUNT_RATE);
    }
}
