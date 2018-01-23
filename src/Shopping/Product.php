<?php

namespace App\Shopping;

/**
 * Class Product
 * @package App\Shopping
 */
class Product
{
    /** @var string 商品料號 */
    private $serialNo;

    /** @var int 售價 */
    private $price;

    /**
     * Product constructor.
     * @param string $serialNo
     * @param int $price
     */
    public function __construct(string $serialNo, int $price)
    {
        $this->serialNo = $serialNo;
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
