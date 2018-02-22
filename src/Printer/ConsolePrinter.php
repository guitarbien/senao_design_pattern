<?php

namespace App\Printer;

/**
 * Class PlainTextPrinter
 * @package App\Printer
 */
class ConsolePrinter implements Printable
{
    /** @var string */
    private $content;

    /** @var int */
    private $width;

    /**
     * PlainText constructor.
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
        $this->width = mb_strlen($content);
    }

    public function open()
    {
        $this->printSeparatorBar();
    }

    public function close()
    {
        $this->printSeparatorBar();
    }

    public function print()
    {
        $this->println('|' . $this->content . '|');
    }

    private function printSeparatorBar()
    {
        echo '+';

        for ($i = 0; $i < $this->width; $i++) {
            echo '-';
        }

        $this->println('+');
    }

    /**
     * @param string $string
     */
    private function println(string $string)
    {
        echo $string . PHP_EOL;
    }
}
