<?php

declare(strict_types=1);

namespace App\Composite\Product;

/**
 * Class IPadAir
 * @package App\Composite\Product
 */
final class IPadAir implements ProductInterface
{
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 10000;
    }
}
