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

    /** @var string */
    protected $channel;

    /**
     * Clock constructor.
     * @param $channel
     */
    public function __construct(string $channel)
    {
        $this->channel = $channel;
    }

    /**
     * Attach an SplObserver
     * @param ITimerObserver $observer
     */
    public function attach(ITimerObserver $observer): void
    {
        $key = get_class($observer);

        if (!isset($this->observerList[$this->channel][$key])) {
            $this->observerList[$this->channel][$key] = $observer;
        }
    }

    /**
     * Detach an observer
     * @param ITimerObserver $observer
     */
    public function detach(ITimerObserver $observer): void
    {
        unset($this->observerList[$this->channel][get_class($observer)]);
    }

    /**
     * Notify an observer
     */
    public function notify(): void
    {
        foreach ($this->observerList[$this->channel] as $subscriber) {
            try {
                /** @var ITimerObserver $subscriber */
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