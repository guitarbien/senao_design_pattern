<?php

namespace App\Printer;

/**
 * Class AbstractDocument
 * @package App\Printer
 */
class AbstractDocument
{
    /** @var Printable */
    protected $printer;

    /**
     * Document constructor.
     * @param Printable $printer
     */
    public function __construct(Printable $printer)
    {
        $this->printer = $printer;
    }

    public function open()
    {
        $this->printer->open();
    }

    public function print()
    {
        $this->printer->print();
    }

    public function close()
    {
        $this->printer->close();
    }
}
