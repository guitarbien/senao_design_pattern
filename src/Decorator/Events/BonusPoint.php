<?php

declare(strict_types=1);

namespace App\Decorator\Events;

/**
 * Class BonusPoint
 * @package App\Decorator\Events
 */
final class BonusPoint
{
    /** @var int */
    private $points;

    /**
     * BonusPoint constructor.
     * @param int $points
     */
    public function __construct(int $points)
    {
        $this->points = $points;
    }
}
