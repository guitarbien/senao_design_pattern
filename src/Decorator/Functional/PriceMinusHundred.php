<?php

declare(strict_types=1);

namespace App\Decorator\Functional;

use Closure;

/**
 * Class PriceMinusHundred
 * @package App\Decorator\Functional
 */
final class PriceMinusHundred
{
    /**
     * @param Closure $discountFn
     * @return Closure
     */
    public static function discount(Closure $discountFn): Closure
    {
        return function(int $totalPrice) use($discountFn) {
            return $discountFn($totalPrice) - 100;
        };
    }
}
