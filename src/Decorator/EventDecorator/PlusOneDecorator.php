<?php

declare(strict_types=1);

namespace App\Decorator\EventDecorator;

use App\Decorator\BankType;
use App\Decorator\Events\PlusOne;

/**
 * Class PlusOneDecorator
 * @package App\Decorator\EventDecorator
 */
final class PlusOneDecorator extends AbstractEventDecorator
{
    /**
     * @param array $events
     * @return array
     */
    public function getEvents(array $events): array
    {
        if (!in_array($this->getBank(), [BankType::CITI, BankType::TAISHIN])) {
            return $this->eventDecorator->getEvents($events);
        }

        $currentEvents = $this->eventDecorator->getEvents($events);
        $currentEvents[] = new PlusOne();

        return $currentEvents;
    }
}
