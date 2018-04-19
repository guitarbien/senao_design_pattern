<?php

declare(strict_types=1);

namespace App\Composite\Product;

/**
 * Class MacBookPro
 * @package App\Composite\Product
 */
final class MacBookPro implements ProductInterface
{
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 60000;
    }
}