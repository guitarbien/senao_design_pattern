<?php

declare(strict_types=1);

namespace App\Composite\Product;

/**
 * Class LegendOfZelda
 * @package App\Composite\Product
 */
final class LegendOfZelda extends AbstractProduct
{
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->getCalculator()->calculateSum([new PriceTag(2000)]);
    }
}
