<?php

declare(strict_types=1);

namespace App\Decorator\PriceDecorator;

/**
 * Class OriginalPriceDecorator
 * @package App\Decorator\PriceDecorator
 */
final class OriginalPriceDecorator implements DecoratorInterface
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
