<?php

namespace App;

/**
 * Class Clock
 * @package App
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
        $counter = 1;

        while (true) {
            if ($counter >= self::MAX_RECORDING_TIME) {
                break;
            }

            $this->currentTime = date('H:i:s');
            $this->notify();

            $counter += 1;

            sleep(1);
        }
    }
}