<?php

declare(strict_types=1);

namespace App\Decorator\EventDecorator;

/**
 * Class AbstractEventDecorator
 * @package App\Decorator\EventDecorator
 */
abstract class AbstractEventDecorator implements EventDecorator
{
    /** @var EventDecorator */
    protected $eventDecorator;

    /**
     * Events constructor.
     * @param EventDecorator $eventDecorator
     */
    public function __construct(EventDecorator $eventDecorator)
    {
        $this->eventDecorator = $eventDecorator;
    }

    /**
     * @param array $events
     * @return array
     */
    abstract public function getEvents(array $events): array;
}
