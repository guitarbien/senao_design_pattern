<?php

namespace App\Printer;

/**
 * Class Document
 * @package App\Printer
 */
class Document extends AbstractDocument
{
    public function display()
    {
        $this->printer->open();
        $this->printer->print();
        $this->printer->close();
    }
}
