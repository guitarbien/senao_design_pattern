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
    public function getPrice(int $currentPrice): int
    {
        $totalPrice = $this->decorator->getPrice($currentPrice);
        if (in_array($this->getBank(), [BankType::CTBC, BankType::TAISHIN])) {
            return (int)($totalPrice * 0.8);
        }

        return $totalPrice;
    }
}
