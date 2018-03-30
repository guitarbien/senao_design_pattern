<?php

declare(strict_types=1);

namespace App\Decorator\EventDecorator;

use App\Decorator\BankType;
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
        if (!in_array($this->getBank(), [BankType::CTBC, BankType::TAISHIN])) {
            return $this->eventDecorator->getEvents($events);
        }

        $currentEvents = $this->eventDecorator->getEvents($events);
        $currentEvents[] = new Coupon(100);

        return $currentEvents;
    }
}
