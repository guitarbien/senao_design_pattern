<?php

declare(strict_types=1);

namespace App\Composite\Product;

/**
 * Interface ProductInterface
 * @package App\Composite\Product
 */
interface ProductInterface
{
    /**
     * @return int
     */
    public function getPrice(): int;
}
