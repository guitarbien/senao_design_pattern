<?php

declare(strict_types=1);

namespace App\Composite\Product;

/**
 * Class MacBookPro
 * @package App\Composite\Product
 */
final class MacBookPro extends AbstractProduct
{
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->getCalculator()->calculateSum([new PriceTag(60000)]);
    }
}
