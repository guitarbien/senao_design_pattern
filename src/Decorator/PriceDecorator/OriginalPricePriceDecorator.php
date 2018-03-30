<?php

declare(strict_types=1);

namespace App\Decorator\PriceDecorator;

/**
 * Class OriginalPriceDecorator
 * @package App\Decorator\PriceDecorator
 */
final class OriginalPricePriceDecorator implements PriceDecoratorInterface
{
    /**
     * @param int $totalPrice
     * @return int
     */
    public function getPrice(int $totalPrice): int
    {
        return $totalPrice;
    }
}
