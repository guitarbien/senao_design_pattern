<?php

declare(strict_types=1);

namespace App\Decorator\PriceDecorator;

use App\Decorator\BankType;

/**
 * Class MinusHundredDecorator
 * @package App\Decorator\PriceDecorator
 */
final class MinusHundredDecorator extends AbstractPricePriceDecorator
{
    /**
     * @param int $currentPrice
     * @return int
     */
    public function getPrice(int $currentPrice): int
    {
        $totalPrice = $this->decorator->getPrice($currentPrice);
        if (in_array($this->getBank(), [BankType::CTBC, BankType::CITI]) && ($totalPrice >= 1000)) {
            return $totalPrice - 100;
        }

        return $totalPrice;
    }
}
