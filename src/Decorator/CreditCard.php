<?php

declare(strict_types=1);

namespace App\Decorator;

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

    /** @var DecoratorInterface */
    private $decorator;

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
            $order->setPlusOneEvent(true);
        }

        return $order;
    }
}
