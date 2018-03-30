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
     * @return string
     */
    public function getBank(): string
    {
        return $this->decorator->getBank();
    }

    /**
     * @param int $currentPrice
     * @return int
     */
    abstract public function getPrice(int $currentPrice): int;
}
