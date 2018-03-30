<?php

declare(strict_types=1);

namespace App\Decorator\PriceDecorator;

use App\Decorator\BankType;

/**
 * Class TwentyPercentOffDecorator
 * @package App\Decorator\PriceDecorator
 */
final class TwentyPercentOffDecorator extends AbstractPricePriceDecorator
{
    /**
     * @param int $totalPrice
     * @return int
     */
    public function getPrice(int $totalPrice): int
    {
        if (in_array($this->getBank(), [BankType::CTBC, BankType::TAISHIN])) {
            return (int)($this->decorator->getPrice($totalPrice) * 0.8);
        }

        return ($this->decorator->getPrice($totalPrice));
    }
}
