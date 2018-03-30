<?php

declare(strict_types=1);

namespace App\Decorator\PriceDecorator;

/**
 * Class TwentyPercentOffDecorator
 * @package App\Decorator\PriceDecorator
 */
final class TwentyPercentOffDecorator implements DecoratorInterface
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
        return (int)($this->decorator->getPrice($totalPrice) * 0.8);
    }
}
