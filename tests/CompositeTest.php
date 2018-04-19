<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Composite\Cart;
use App\Composite\Product\MacBookPro;
use App\Composite\Product\IPadAir;

/**
 * Class CompositeTest
 */
class CompositeTest extends TestCase
{
    public function test_購買MacbookPro花費60000()
    {
        // arrange
        $cart = new Cart();
        $cart->addProduct(new MacBookPro());

        // act
        $totalPrice = $cart->calculate();

        // assert
        static::assertEquals(60000, $totalPrice);
    }

    public function test_購買ipadAir花費10000()
    {
        // arrange
        $cart = new Cart();
        $cart->addProduct(new IPadAir());

        // act
        $totalPrice = $cart->calculate();

        // assert
        static::assertEquals(10000, $totalPrice);
    }
}
