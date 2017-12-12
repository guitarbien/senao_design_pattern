<?php

namespace App;

/**
 * Interface IClock
 * @package App
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