<?php

declare(strict_types=1);

namespace App\Composite\Product;

/**
 * Class NintendoSwitch
 * @package App\Composite\Product
 */
final class NintendoSwitch implements ProductInterface
{
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 10000;
    }
}
