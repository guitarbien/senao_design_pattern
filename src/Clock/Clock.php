<?php

namespace App\Clock;

/**
 * Class Clock
 * @package App\Clock
 */
class Clock extends AbstractTimerSubject
{
    /** @const 最大紀錄次數 */
    const MAX_RECORDING_TIME = 3;

    /**
     * 每秒計時一次
     * @override
     */
    public function onTick(): void
    {
        $this->currentTime = date('H:i:s');
        $this->notify();
    }
}