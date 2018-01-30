<?php

namespace App\Printer;

/**
 * Class RandomTimesDocument
 * @package App\Printer
 */
class RandomTimesDocument extends RepeatDocument
{
    /** @const int */
    const MAX_TIMES = 3;

    public function show()
    {
        $this->printTimes(rand(1, self::MAX_TIMES));
    }
}
