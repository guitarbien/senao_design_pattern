<?php

declare(strict_types=1);

namespace App\Decorator;

use App\Decorator\EventDecorator\BonusPointDecorator;
use App\Decorator\EventDecorator\CouponDecorator;
use App\Decorator\EventDecorator\NullEventDecorator;
use App\Decorator\EventDecorator\PlusOneDecorator;
use App\Decorator\Functional\PriceMinusHundred;
use App\Decorator\Functional\PriceOriginal;
use App\Decorator\Functional\PriceTwentyPercentOff;
use App\Decorator\PriceDecorator\MinusHundredDecorator;
use App\Decorator\PriceDecorator\OriginalPricePriceDecorator;
use App\Decorator\PriceDecorator\TwentyPercentOffDecorator;

/**
 * Class CreditCard
 * @package App\Decorator
 */
final class CreditCard
{
    /** @var string */
    private $bank;

    /**
     * CreditCard constructor.
     * @param string $bank
     */
    public function __construct(string $bank)
    {
        $this->bank = $bank;
    }

    /**
     * @param int $totalPrice
     * @return Order
     */
    public function checkOut(int $totalPrice): Order
    {
        $order = new Order();

        // calculate price
        $totalPrice = (new TwentyPercentOffDecorator(
                            new MinusHundredDecorator(
                                new OriginalPricePriceDecorator($this->bank))))
                                    ->getPrice($totalPrice);

        $order->setTotalPrice($totalPrice);

        // handle events
        $events = (new PlusOneDecorator(
                    new BonusPointDecorator(
                        new CouponDecorator(
                            new NullEventDecorator($this->bank)))))
                                ->getEvents([]);

        $order->setEvents($events);

        return $order;
    }

    /**
     * Functional version
     * @param int $totalPrice
     * @return Order
     */
    public function functionalCheckOut(int $totalPrice): Order
    {
        $order = new Order();

        // calculate price
        $originalPriceFn     = PriceOriginal::discount();
        $minusHundredPriceFn = PriceMinusHundred::discount($originalPriceFn);
        $twentyPercentOffFn  = PriceTwentyPercentOff::discount($minusHundredPriceFn);

        $order->setTotalPrice($twentyPercentOffFn($totalPrice));

        return $order;
    }
}
