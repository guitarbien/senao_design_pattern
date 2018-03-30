<?php

declare(strict_types=1);

namespace App\Decorator\EventDecorator;

use App\Decorator\Events\PlusOne;

/**
 * Class PlusOneDecorator
 * @package App\Decorator\EventDecorator
 */
final class PlusOneDecorator implements EventDecorator
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
        $events[] = new PlusOne();
    }
}
