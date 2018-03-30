<?php

declare(strict_types=1);

namespace App\Decorator\EventDecorator;

/**
 * Class NullEventDecorator
 * @package App\Decorator\EventDecorator
 */
final class NullEventDecorator implements EventDecorator
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