<?php

namespace App\Printer;

/**
 * Interface Printable
 * @package App\Printer
 */
interface Printable
{
    public function open();

    public function close();

    public function print();
}
