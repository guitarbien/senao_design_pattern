<?php

declare(strict_types=1);

namespace App\Decorator;

use App\Decorator\PriceDecorator\AbstractPricePriceDecorator;

/**
 * Class NullPriceDecorator
 * @package App\Decorator
 */
final class NullPriceDecorator extends AbstractPricePriceDecorator
{

    /**
     * @param int $currentPrice
     * @return int
     */
    public function getPrice(int $currentPrice): int
    {
        return $currentPrice;
    }
}
