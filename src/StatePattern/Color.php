<?php

declare(strict_types=1);

namespace App\StatePattern;

use MyCLabs\Enum\Enum;

/**
 * Class State
 * @package App\StatePattern
 */
final class Color extends Enum
{
    const GREEN  = 'green';
    const YELLOW = 'yellow';
    const RED    = 'red';

    /**
     * @return Color
     */
    public static function GREEN(): self
    {
        return new Color(self::GREEN);
    }

    /**
     * @return Color
     */
    public static function YELLOW(): self
    {
        return new Color(self::YELLOW);
    }

    /**
     * @return Color
     */
    public static function RED(): self
    {
        return new Color(self::RED);
    }
}
