<?php

declare(strict_types=1);

use App\Decorator\BankType;
use App\Decorator\Events\Coupon;
use PHPUnit\Framework\TestCase;
use App\Decorator\CreditCard;

/**
 * Class DecoratorTest
 */
class DecoratorTest extends TestCase
{
    public function test_刷中信卡滿千送百全館八折送百元折價券()
    {
        $creditCard = new CreditCard(BankType::CTBC);
        $order = $creditCard->checkOut(1100);

        static::assertEquals($order->getTotalPrice(), 800);

        static::assertTrue(collect($order->getEvents())->contains(function($instance) {
            return $instance instanceof Coupon;
        }));
    }
}
