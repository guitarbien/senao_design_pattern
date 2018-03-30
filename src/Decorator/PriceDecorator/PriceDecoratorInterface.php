<?php

declare(strict_types=1);

namespace App\Decorator\PriceDecorator;

/**
 * Interface PriceDecoratorInterface
 * @package App\Decorator\PriceDecorator
 */
interface PriceDecoratorInterface
{
    /**
     * @param int $currentPrice
     * @return int
     */
    public function getPrice(int $currentPrice): int;

    /**
     * @return string
     */
    public function getBank(): string;
}
