<?php

use App\Shopping\MinusHundredPlan;
use App\Shopping\Cart;
use App\Shopping\Product;
use App\Shopping\PercentOffPlan;
use PHPUnit\Framework\TestCase;

/**
 * Class StrategyTest
 */
class StrategyTest extends TestCase
{
    public function test_訂單可以使用滿千送百活動()
    {
        // arrange
        $productA = new Product(110);
        $productB = new Product(95);
        $productC = new Product(675);

        $minusHundredPlan = new MinusHundredPlan(1000);

        $cart = new Cart();

        // act
        $cart->addItem($productA, 2)
              ->addItem($productB, 3)
              ->addItem($productC)
              ->addItem($productC)
              ->addDiscountPlan($minusHundredPlan);

        // assert
        $expected = (110 * 2 + 95 * 3 + 675 * 2) - 100;
        static::assertEquals($expected, $cart->calculateTotalPrice());
    }

    public function test_訂單可以使用全館八折活動()
    {
        // arrange
        $productA = new Product(110);
        $productB = new Product(95);
        $productC = new Product(675);

        $percentOffPlan = new PercentOffPlan(20);

        $cart = new Cart();

        // act
        $cart->addItem($productA, 2)
              ->addItem($productB, 3)
              ->addItem($productC)
              ->addItem($productC)
              ->addDiscountPlan($percentOffPlan);

        // assert
        $expected = (110 * 2 + 95 * 3 + 675 * 2) * 0.8;
        static::assertEquals($expected, $cart->calculateTotalPrice());
    }

    public function test_訂單可以自動選用對消費者最優惠促銷活動_全館八折較優()
    {
        // arrange
        $productA = new Product(110);
        $productB = new Product(95);
        $productC = new Product(675);

        $minusHundredPlan = new MinusHundredPlan(1000);
        $percentOffPlan   = new PercentOffPlan(20);

        $cart = new Cart();

        // act
        $cart->addItem($productA, 2)
              ->addItem($productB, 3)
              ->addItem($productC)
              ->addItem($productC)
              ->addDiscountPlan($percentOffPlan)
              ->addDiscountPlan($minusHundredPlan);

        // assert
        $expected = (110 * 2 + 95 * 3 + 675 * 2) * 0.8;
        static::assertEquals($expected, $cart->calculateTotalPrice());
    }

    public function test_全館八折一定比較便宜()
    {
        foreach (range(1, 100000, 500) as $price) {
            $planAPrice = (new Cart())->addItem(new Product($price))->addDiscountPlan(new PercentOffPlan(20))->calculateTotalPrice();
            $planBPrice = (new Cart())->addItem(new Product($price))->addDiscountPlan(new MinusHundredPlan(1000))->calculateTotalPrice();

            static::assertLessThan($planBPrice, $planAPrice);

        }
    }
}
