<?php

use App\Shopping\Product;
use App\Shopping\MinusHundredPlan;
use PHPUnit\Framework\TestCase;

/**
 * Class StrategyTest
 */
class StrategyTest extends TestCase
{
    public function test_訂單可以使用滿千送百活動()
    {
        // arrange
        $productA = new Product('sno001A', 110);
        $productB = new Product('sno002B', 95);
        $productC = new Product('sno003C', 675);

        $minusHundredPlan = new MinusHundredPlan(1000);

        $order = new Order();

        // act
        $order->addItem($productA, 2)
              ->addItem($productB, 3)
              ->addItem($productC)
              ->addItem($productC)
              ->addDiscountPlan($minusHundredPlan);

        // assert
        $expected = (110 * 2 + 95 * 3 + 675 * 2) - 100;
        static::assertEquals($expected, $order->cauculateTotalPrice());
    }

    public function test_訂單可以使用全館八折活動()
    {
        // arrange
        $productA = new Product('sno001A', 110);
        $productB = new Product('sno002B', 95);
        $productC = new Product('sno003C', 675);

        $percentOffPlan = new PercentOffPlan(20);

        $order = new Order();

        // act
        $order->addItem($productA, 2)
              ->addItem($productB, 3)
              ->addItem($productC)
              ->addItem($productC)
              ->addDiscountPlan($percentOffPlan);

        // assert
        $expected = (110 * 2 + 95 * 3 + 675 * 2) * 0.8;
        static::assertEquals($expected, $order->cauculateTotalPrice());
    }

    public function test_訂單可以自動選用對消費者最優惠促銷活動_全館八折較優()
    {
        // arrange
        $productA = new Product('sno001A', 110);
        $productB = new Product('sno002B', 95);
        $productC = new Product('sno003C', 675);

        $minusHundredPlan = new MinusHundredPlan(1000);
        $percentOffPlan   = new PercentOffPlan(20);

        $order = new Order();

        // act
        $order->addItem($productA, 2)
              ->addItem($productB, 3)
              ->addItem($productC)
              ->addItem($productC)
              ->addDiscountPlan($minusHundredPlan)
              ->addDiscountPlan($percentOffPlan);

        // assert
        $expected = (110 * 2 + 95 * 3 + 675 * 2) * 0.8;
        static::assertEquals($expected, $order->cauculateTotalPrice());
    }

    public function test_訂單可以自動選用對消費者最優惠促銷活動_滿千送百較優()
    {
        // arrange
        $productA = new Product('sno001A', 110);

        $minusHundredPlan = new MinusHundredPlan(1000);
        $percentOffPlan   = new PercentOffPlan(20);

        $order = new Order();

        // act
        $order->addItem($productA, 10)
              ->addDiscountPlan($minusHundredPlan)
              ->addDiscountPlan($percentOffPlan);

        // assert
        $expected = (110 * 10) - 100;
        static::assertEquals($expected, $order->cauculateTotalPrice());
    }
}
