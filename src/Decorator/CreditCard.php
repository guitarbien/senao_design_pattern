<?php

declare(strict_types=1);

namespace App\Decorator;

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

        if  ($this->bank === BankType::CTBC) {
            // 滿千送百
            if ($totalPrice >= 1000) {
                $totalPrice -= 100;
            }

            // 全館八折
            $totalPrice = (int)round($totalPrice * 0.8);
            $order->setTotalPrice($totalPrice);

            // 送百元折價券
            $order->setPlusOneEvent(true);
        }

        return $order;
    }
}
