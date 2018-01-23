<?php

namespace App\Shopping;

/**
 * Class MinusHundredPlan
 * @package App\Shopping
 */
class MinusHundredPlan implements DiscountPlan
{
    /** @var int "幾"千送幾百 */
    private $baseline;

    /**
     * MinusHundredPlan constructor.
     * @param int $baseline
     */
    public function __construct(int $baseline)
    {
        $this->baseline = $baseline;
    }

    /**
     * @param int $originalPrice
     * @return int
     */
    public function calculateTotalPrice(int $originalPrice): int
    {
        return $originalPrice - (floor($originalPrice / $this->baseline) * 100);
    }
}
