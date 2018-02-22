<?php

namespace App\Printer;

/**
 * Class RepeatDocument
 * @package App\Printer
 */
class RepeatDocument extends Document
{
    /**
     * @param int $times
     */
    public function printTimes(int $times)
    {
        $this->open();

        for ($i = 0; $i < $times; $i++) {
            $this->print();
        }

        $this->close();
    }
}
