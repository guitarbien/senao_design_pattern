<?php

declare(strict_types=1);

use App\Decorator\BankType;
use App\Decorator\Events\Coupon;
use App\Decorator\Events\PlusOne;
use App\Decorator\Events\BonusPoint;
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

    public function test_刷台新卡全館八折加一元多一件送百元折價券()
    {
        $creditCard = new CreditCard(BankType::TAISHIN);
        $order = $creditCard->checkOut(1100);

        static::assertEquals($order->getTotalPrice(), 880);

        static::assertTrue(collect($order->getEvents())->contains(function($instance) {
            return $instance instanceof PlusOne;
        }));

        static::assertTrue(collect($order->getEvents())->contains(function($instance) {
            return $instance instanceof Coupon;
        }));
    }

    public function test_刷花旗卡滿千送百紅利點數一百點加一元多一件()
    {
        $creditCard = new CreditCard(BankType::CITI);
        $order = $creditCard->checkOut(1100);

        static::assertEquals($order->getTotalPrice(), 1000);

        static::assertTrue(collect($order->getEvents())->contains(function($instance) {
            return $instance instanceof BonusPoint;
        }));

        static::assertTrue(collect($order->getEvents())->contains(function($instance) {
            return $instance instanceof PlusOne;
        }));
    }
}
