<?php

declare(strict_types=1);

namespace App\Decorator\ConditionProxy;

/**
 * Class Customer
 * @package App\Decorator\ConditionProxy
 */
final class Customer
{
    /**
     * @return bool
     */
    public function isMember(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isVipMember(): bool
    {
        return true;
    }
}
