<?php

declare(strict_types=1);

namespace App\Decorator\Functional;

use Closure;

/**
 * Class TwentyPercentOff
 * @package App\Decorator\Functional
 */
final class PriceTwentyPercentOff
{
    /**
     * @return Closure
     */
    public static function discount(Closure $discountFn): Closure
    {
        return function(int $totalPrice) use ($discountFn) {
            return (int)($discountFn($totalPrice) * 0.8);
        };
    }
}
