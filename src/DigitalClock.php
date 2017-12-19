<?php

namespace App;

/**
 * Class DigitalClock
 * @package App
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