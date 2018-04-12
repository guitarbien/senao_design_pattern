<?php

declare(strict_types=1);

namespace App\Decorator;

use App\Decorator\EventDecorator\AbstractEventDecorator;

/**
 * Class NullEventDecorator
 * @package App\Decorator
 */
final class NullEventDecorator extends AbstractEventDecorator
{
    /**
     * @param array $events
     * @return array
     */
    public function getEvents(array $events): array
    {
        return $events;
    }
}
