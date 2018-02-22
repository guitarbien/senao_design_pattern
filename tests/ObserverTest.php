<?php

use App\Clock\Clock;
use App\Clock\DigitalClock;
use PHPUnit\Framework\TestCase;

/**
 * Class ObserverTest
 */
class ObserverTest extends TestCase
{
    public function test_執行Clock_onTick時會從DigitalClock_update得到輸出的時分秒()
    {
        // arrange
        // 必須在開始執行之前先計算好 output
        $expectedOutput = date('H:i:s') . date('H:i:s', strtotime('+1 second')) . date('H:i:', strtotime('+2 seconds'));

        /** @var DigitalClock $digitalClock */
        $digitalClock = Mockery::spy(DigitalClock::class)->makePartial();

        $clock = new Clock('refreshTime');
        $clock->attach($digitalClock);

        $counter = 0;

        // action
        while (true) {
            if ($counter >= Clock::MAX_RECORDING_TIME) {
                break;
            }

            // 每秒鐘執行 onTick() 一次
            $clock->onTick();

            $counter += 1;
            sleep(1);
        }

        // assert
        $digitalClock->shouldHaveReceived('update')
                     ->times(Clock::MAX_RECORDING_TIME);

        static::assertStringStartsWith($expectedOutput, $this->getActualOutput());
    }
}
