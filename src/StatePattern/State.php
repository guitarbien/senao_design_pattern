<?php

declare(strict_types=1);

namespace App\StatePattern;

use MyCLabs\Enum\Enum;

/**
 * Class State
 * @package App\StatePattern
 */
final class State extends Enum
{
    const GREEN  = 'green';
    const YELLOW = 'yellow';
    const RED    = 'red';

    /**
     * @return State
     */
    public static function GREEN(): self
    {
        return new State(self::GREEN);
    }

    /**
     * @return State
     */
    public static function YELLOW(): self
    {
        return new State(self::YELLOW);
    }

    /**
     * @return State
     */
    public static function RED(): self
    {
        return new State(self::RED);
    }
}
