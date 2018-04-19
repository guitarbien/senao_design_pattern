<?php

declare(strict_types=1);

namespace App\Composite\Product;

/**
 * Class PriceTag
 * @package App\Composite\Product
 */
final class PriceTag implements ProductInterface
{
    /** @var int */
    private $price;

    /**
     * PriceTag constructor.
     * @param int $price
     */
    public function __construct(int $price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}
