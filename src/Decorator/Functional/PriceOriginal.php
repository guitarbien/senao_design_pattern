<?php

declare(strict_types=1);

namespace App\Decorator\Functional;

use Closure;

/**
 * Class PriceOriginal
 * @package App\Decorator\Functional
 */
final class PriceOriginal
{
    /**
     * @return Closure
     */
    public static function discount(): Closure
    {
        return function(int $totalPrice) {
            return $totalPrice;
        };
    }
}
