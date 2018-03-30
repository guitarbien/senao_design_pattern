<?php

declare(strict_types=1);

namespace App\Decorator\PriceDecorator;

/**
 * Class MinusHundredDecorator
 * @package App\Decorator\PriceDecorator
 */
final class MinusHundredDecorator extends AbstractPricePriceDecorator
{
    /**
     * @param int $totalPrice
     * @return int
     */
    public function getPrice(int $totalPrice): int
    {
        return ($totalPrice >= 1000) ? $this->decorator->getPrice($totalPrice) - 100 : $totalPrice;
    }
}
