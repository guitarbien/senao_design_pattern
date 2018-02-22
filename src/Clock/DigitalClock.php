<?php

namespace App\Clock;

/**
 * Class DigitalClock
 * @package App\Clock
 */
class DigitalClock implements ITimerObserver
{
    /**
     * Receive update from subject
     * @param AbstractTimerSubject $subject
     */
    public function update(AbstractTimerSubject $subject): void
    {
        echo $subject->getLastRecordTime();
    }
}