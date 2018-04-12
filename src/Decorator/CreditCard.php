<?php

declare(strict_types=1);

namespace App\Decorator;

use App\Decorator\ConditionProxy\Customer;
use App\Decorator\ConditionProxy\PromotionPeriod;
use App\Decorator\EventDecorator\AbstractEventDecorator;
use App\Decorator\EventDecorator\BonusPointDecorator;
use App\Decorator\EventDecorator\CouponDecorator;
use App\Decorator\EventDecorator\EventDecorator;
use App\Decorator\EventDecorator\OriginalEventDecorator;
use App\Decorator\EventDecorator\PlusOneDecorator;
use App\Decorator\Functional\PriceMinusHundred;
use App\Decorator\Functional\PriceOriginal;
use App\Decorator\Functional\PriceTwentyPercentOff;
use App\Decorator\PriceDecorator\MinusHundredDecorator;
use App\Decorator\PriceDecorator\OriginalPricePriceDecorator;
use App\Decorator\PriceDecorator\PriceDecoratorInterface;
use App\Decorator\PriceDecorator\TwentyPercentOffDecorator;

/**
 * Class CreditCard
 * @package App\Decorator
 */
final class CreditCard
{
    /** @var string */
    private $bank;

    /** @var Customer */
    private $customer;

    /** @var PromotionPeriod */
    private $promotionPeriod;

    /**
     * CreditCard constructor.
     * @param string $bank
     * @param Customer $customer
     * @param PromotionPeriod $promotionPeriod
     */
    public function __construct(string $bank, Customer $customer, PromotionPeriod $promotionPeriod)
    {
        $this->bank            = $bank;
        $this->customer        = $customer;
        $this->promotionPeriod = $promotionPeriod;
    }

    /**
     * @param AbstractEventDecorator $eventDecorator
     * @return EventDecorator
     */
    private function proxyCouponDecorator(EventDecorator $eventDecorator): EventDecorator
    {
        return $this->customer->isMember() ? new CouponDecorator($eventDecorator) : new NullEventDecorator($eventDecorator);
    }

    /**
     * @param PriceDecoratorInterface $priceDecorator
     * @return PriceDecoratorInterface
     */
    private function proxyTwentyPercentOffDecorator(PriceDecoratorInterface $priceDecorator):  PriceDecoratorInterface
    {
        return $this->customer->isVipMember() ? new TwentyPercentOffDecorator($priceDecorator) : new NullPriceDecorator($priceDecorator);
    }

    /**
     * @param EventDecorator $eventDecorator
     * @return EventDecorator
     */
    private function proxyPlusOneDecorator(EventDecorator $eventDecorator): EventDecorator
    {
        return $this->customer->isMember() ? new PlusOneDecorator($eventDecorator) : new NullEventDecorator($eventDecorator);
    }

    /**
     * @param int $totalPrice
     * @return Order
     */
    public function checkOut(int $totalPrice): Order
    {
        $order = new Order();

        // calculate price
        $totalPrice = $this->proxyTwentyPercentOffDecorator(
                                new MinusHundredDecorator(
                                    new OriginalPricePriceDecorator($this->bank)))
                                        ->getPrice($totalPrice);

        $order->setTotalPrice($totalPrice);

        // handle events
        $events = $this->proxyPlusOneDecorator(
                    new BonusPointDecorator(
                        $this->proxyCouponDecorator(new OriginalEventDecorator($this->bank))))
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
