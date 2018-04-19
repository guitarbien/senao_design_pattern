<?php

declare(strict_types=1);

namespace App\Composite\Product;

/**
 * Class IPadAir
 * @package App\Composite\Product
 */
final class IPadAir extends AbstractProduct
{
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->getCalculator()->calculateSum([new PriceTag(10000)]);
    }
}
