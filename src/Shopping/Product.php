<?php

namespace App\Shopping;

/**
 * Class Product
 * @package App\Shopping
 */
class Product
{
    /** @var int 售價 */
    private $price;

    /**
     * Product constructor.
     * @param int $price
     */
    public function __construct(int $price)
    {
        $this->price    = $price;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}
