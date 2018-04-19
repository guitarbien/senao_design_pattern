<?php

declare(strict_types=1);

namespace App\Composite\Product;

final class LengendOfZelda implements ProductInterface
{
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 2000;
    }
}
