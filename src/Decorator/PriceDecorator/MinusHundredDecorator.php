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
     * @param int $totalPrice
     * @return int
     */
    public function getPrice(int $totalPrice): int
    {
        if (in_array($this->getBank(), [BankType::CTBC, BankType::CITI]) && ($totalPrice >= 1000)) {
            return $this->decorator->getPrice($totalPrice) - 100;
        }

        return $this->decorator->getPrice($totalPrice);
    }
}
