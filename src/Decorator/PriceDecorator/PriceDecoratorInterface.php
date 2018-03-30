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
     * @param int $totalPrice
     * @return int
     */
    public function getPrice(int $totalPrice): int;

    /**
     * @return string
     */
    public function getBank(): string;
}
