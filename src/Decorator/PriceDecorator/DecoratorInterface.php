<?php

declare(strict_types=1);

namespace App\Decorator\PriceDecorator;

/**
 * Interface CheckOutInterface
 * @package App\Decorator\PriceDecorator
 */
interface DecoratorInterface
{
    /**
     * @param int $totalPrice
     * @return int
     */
    public function getPrice(int $totalPrice): int;
}
