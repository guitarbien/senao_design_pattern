<?php

declare(strict_types=1);

namespace App\Decorator;

use App\Decorator\EventDecorator\CouponDecorator;
use App\Decorator\EventDecorator\NullEventDecorator;
use App\Decorator\EventDecorator\PlusOneDecorator;
use App\Decorator\PriceDecorator\DecoratorInterface;
use App\Decorator\PriceDecorator\MinusHundredDecorator;
use App\Decorator\PriceDecorator\OriginalPriceDecorator;
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

        if ($this->bank === BankType::CTBC) {
            $totalPrice = (new TwentyPercentOffDecorator(
                            new MinusHundredDecorator(
                                new OriginalPriceDecorator())))
                                ->getPrice($totalPrice);

            $order->setTotalPrice($totalPrice);

            // 送百元折價券
            $events = (new CouponDecorator(new NullEventDecorator()))->getEvents([]);
            $order->setEvents($events);
        }

        if ($this->bank === BankType::TAISHIN) {
            $totalPrice = (new TwentyPercentOffDecorator(
                            new OriginalPriceDecorator()))
                                ->getPrice($totalPrice);

            $order->setTotalPrice($totalPrice);

            $events = (new PlusOneDecorator(
                        new CouponDecorator(
                            new NullEventDecorator())))
                                ->getEvents([]);

            $order->setEvents($events);
        }

        return $order;
    }
}
