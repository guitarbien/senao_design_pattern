<?php

declare(strict_types=1);

namespace App\Composite\Product;

/**
 * Class AppleWatch
 */
final class AppleWatch extends AbstractProduct
{
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->getCalculator()->calculateSum([new PriceTag(10000)]);
    }
}
