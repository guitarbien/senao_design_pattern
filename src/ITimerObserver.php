<?php

namespace App;

/**
 * Interface ITimerObserver
 * @package App
 */
interface ITimerObserver
{
    /**
     * Receive update from subject
     * @param AbstractTimerSubject $subject
     */
    public function update(AbstractTimerSubject $subject): void;
}