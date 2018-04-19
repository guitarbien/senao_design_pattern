<?php

declare(strict_types=1);

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
}
