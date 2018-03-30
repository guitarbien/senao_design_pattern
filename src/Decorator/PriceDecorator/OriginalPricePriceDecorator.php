<?php

declare(strict_types=1);

namespace App\Decorator\PriceDecorator;

/**
 * Class OriginalPriceDecorator
 * @package App\Decorator\PriceDecorator
 */
final class OriginalPricePriceDecorator implements PriceDecoratorInterface
{
    /** @var string */
    private $bank;

    /**
     * OriginalPricePriceDecorator constructor.
     * @param string $bank
     */
    public function __construct(string $bank)
    {
        $this->bank = $bank;
    }

    /**
     * @return string
     */
    public function getBank(): string
    {
        return $this->bank;
    }

    /**
     * @param int $totalPrice
     * @return int
     */
    public function getPrice(int $totalPrice): int
    {
        return $totalPrice;
    }
}
