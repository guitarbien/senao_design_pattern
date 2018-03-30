<?php

declare(strict_types=1);

namespace App\Decorator\EventDecorator;

/**
 * Interface EventDecorator
 * @package App\Decorator\EventDecorator
 */
interface EventDecorator
{
    /**
     * @param array $events
     * @return array
     */
    public function getEvents(array $events): array;

    /**
     * @return string
     */
    public function getBank(): string;
}
