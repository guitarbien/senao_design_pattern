<?php

declare(strict_types=1);

namespace App\Decorator\EventDecorator;

use App\Decorator\Events\BonusPoint;

/**
 * Class BonusPointDecorator
 * @package App\Decorator\EventDecorator
 */
final class BonusPointDecorator implements EventDecorator
{
    /** @var EventDecorator */
    private $eventDecorator;

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
    public function getEvents(array $events): array
    {
        $currentEvents = $this->eventDecorator->getEvents($events);
        $currentEvents[] = new BonusPoint(100);

        return $currentEvents;
    }
}
