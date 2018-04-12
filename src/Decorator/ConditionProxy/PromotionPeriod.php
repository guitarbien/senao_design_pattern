<?php

declare(strict_types=1);

namespace App\Decorator\ConditionProxy;

/**
 * Class PromotionPeriod
 * @package App\Decorator\ConditionProxy
 */
final class PromotionPeriod
{
    /**
     * @return bool
     */
    public function isInProgress(): bool
    {
        return true;
    }
}
