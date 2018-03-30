<?php

declare(strict_types=1);

namespace App\Decorator\PriceDecorator;

/**
 * Class MinusHundredDecorator
 * @package App\Decorator\PriceDecorator
 */
final class MinusHundredDecorator implements DecoratorInterface
{
    /** @var DecoratorInterface */
    private $decorator;

    /**
     * @param DecoratorInterface $decorator
     */
    public function __construct(DecoratorInterface $decorator = null)
    {
        $this->decorator = $decorator;
    }

    /**
     * @param int $totalPrice
     * @return int
     */
    public function getPrice(int $totalPrice): int
    {
        return ($totalPrice >= 1000) ? $this->decorator->getPrice($totalPrice) - 100 : $totalPrice;
    }
}
