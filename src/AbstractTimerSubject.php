<?php

namespace App;

use Throwable;

/**
 * Class ClockSubject
 * @package App
 */
abstract class AbstractTimerSubject implements ITimer
{
    /** @var ITimerObserver[] */
    private $observerList = [];

    /** @var string */
    protected $currentTime;

    /**
     * Attach an SplObserver
     * @param ITimerObserver $observer
     */
    public function attach(ITimerObserver $observer): void
    {
        $key = get_class($observer);

        if (!isset($this->observerList[$key])) {
            $this->observerList[$key] = $observer;
        }
    }

    /**
     * Detach an observer
     * @param ITimerObserver $observer
     */
    public function detach(ITimerObserver $observer): void
    {
        unset($this->observerList[get_class($observer)]);
    }

    /**
     * Notify an observer
     */
    public function notify(): void
    {
        foreach ($this->observerList as $subscriber) {
            try {
                $subscriber->update($this);
            } catch (Throwable $e) {
                // prevent notify getting blocked
                error_log($e->getMessage());
                continue;
            }
        }
    }

    /**
     * 每秒計時一次
     */
    public abstract function onTick(): void;

    /**
     * 回傳最後的紀錄時間
     * @return string
     */
    public function getLastRecordTime(): string
    {
        return $this->currentTime;
    }
}