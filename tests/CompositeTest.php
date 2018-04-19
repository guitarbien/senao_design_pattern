<?php

declare(strict_types=1);

use App\Composite\Product\AppleWatch;
use PHPUnit\Framework\TestCase;
use App\Composite\Cart;
use App\Composite\Product\MacBookPro;
use App\Composite\Product\IPadAir;
use App\Composite\Product\AppleCombo;
use App\Composite\Product\NintendoSwitch;

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

    public function test_購買AppleWatch花費10000()
    {
        // arrange
        $cart = new Cart();
        $cart->addProduct(new AppleWatch());

        // act
        $totalPrice = $cart->calculate();

        // assert
        static::assertEquals(10000, $totalPrice);
    }

    public function test_購買AppleCombo花費72000()
    {
        // arrange
        $cart = new Cart();
        $cart->addProduct(new AppleCombo());

        // act
        $totalPrice = $cart->calculate();

        // assert
        static::assertEquals(72000, $totalPrice);
    }

    public function test_購買任天堂Switch花費10000()
    {
        // arrange
        $cart = new Cart();
        $cart->addProduct(new NintendoSwitch());

        // act
        $totalPrice = $cart->calculate();

        // assert
        static::assertEquals(10000, $totalPrice);
    }
}
