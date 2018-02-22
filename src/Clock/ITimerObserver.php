<?php

namespace App\Clock;

/**
 * Interface ITimerObserver
 * @package App\Clock
 */
interface ITimerObserver
{
    /**
     * Receive update from subject
     * @param AbstractTimerSubject $subject
     */
    public function update(AbstractTimerSubject $subject): void;
}