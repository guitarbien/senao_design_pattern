<?php

declare(strict_types=1);

namespace App\Decorator\PriceDecorator;

/**
 * Class AbstractPriceDecorator
 * @package App\Decorator\PriceDecorator
 */
abstract class AbstractPricePriceDecorator implements PriceDecoratorInterface
{
    /** @var PriceDecoratorInterface */
    protected $decorator;

    /**
     * @param PriceDecoratorInterface $decorator
     */
    public function __construct(PriceDecoratorInterface $decorator = null)
    {
        $this->decorator = $decorator;
    }

    /**
     * @param int $totalPrice
     * @return int
     */
    abstract public function getPrice(int $totalPrice): int;
}
