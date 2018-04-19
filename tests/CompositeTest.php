<?php

declare(strict_types=1);

use App\Composite\Product\AppleWatch;
use PHPUnit\Framework\TestCase;
use App\Composite\Cart;
use App\Composite\Product\MacBookPro;
use App\Composite\Product\IPadAir;
use App\Composite\Product\AppleCombo;
use App\Composite\Product\NintendoSwitch;
use App\Composite\Product\LengendOfZelda;
use App\Composite\Product\SwitchCombo;
use App\Composite\Product\AppleSwitchCombo;

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

    public function test_分開購買Apple三項產品花費80000()
    {
        // arrange
        $cart = new Cart();
        $cart->addProduct(new MacBookPro());
        $cart->addProduct(new IPadAir());
        $cart->addProduct(new AppleWatch());

        // act
        $totalPrice = $cart->calculate();

        // assert
        static::assertEquals(80000, $totalPrice);
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

    public function test_購買薩爾達傳說花費2000()
    {
        // arrange
        $cart = new Cart();
        $cart->addProduct(new LengendOfZelda());

        // act
        $totalPrice = $cart->calculate();

        // assert
        static::assertEquals(2000, $totalPrice);
    }

    public function test_分開購買Switch兩項產品花費12000()
    {
        // arrange
        $cart = new Cart();
        $cart->addProduct(new NintendoSwitch());
        $cart->addProduct(new LengendOfZelda());

        // act
        $totalPrice = $cart->calculate();

        // assert
        static::assertEquals(12000, $totalPrice);
    }

    public function test_購買SwitchCombo花費10800()
    {
        // arrange
        $cart = new Cart();
        $cart->addProduct(new SwitchCombo());

        // act
        $totalPrice = $cart->calculate();

        // assert
        static::assertEquals(10800, $totalPrice);
    }

    public function test_購買AppleSiwtchCombo花費81800()
    {
        // arrange
        $cart = new Cart();
        $cart->addProduct(new AppleSwitchCombo());

        // act
        $totalPrice = $cart->calculate();

        // assert
        static::assertEquals(81800, $totalPrice);
    }
}
