<?php

declare(strict_types=1);

namespace App\Decorator\EventDecorator;

use App\Decorator\Events\Coupon;

/**
 * Class Events
 * @package App\Decorator\EventDecorator
 */
final class CouponDecorator extends AbstractEventDecorator
{
    /**
     * @param array $events
     * @return array
     */
    public function getEvents(array $events): array
    {
        $currentEvents = $this->eventDecorator->getEvents($events);
        $currentEvents[] = new Coupon(100);

        return $currentEvents;
    }
}
