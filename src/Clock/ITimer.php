<?php

namespace App\Clock;

/**
 * Interface IClock
 * @package App\Clock
 */
interface ITimer
{
    /**
     * 每秒計時一次
     */
    public function onTick(): void;

    /**
     * 回傳最後的紀錄時間
     * @return string
     */
    public function getLastRecordTime(): string;
}