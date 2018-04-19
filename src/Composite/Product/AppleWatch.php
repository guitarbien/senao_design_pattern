<?php

declare(strict_types=1);

namespace App\Composite\Product;

/**
 * Class AppleWatch
 */
final class AppleWatch implements ProductInterface
{
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 10000;
    }
}
