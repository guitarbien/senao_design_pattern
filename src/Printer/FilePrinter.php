<?php

namespace App\Printer;

/**
 * Class FilePrinter
 * @package App\Printer
 */
class FilePrinter implements Printable
{
    const FILE_PATH = __DIR__ . "/../../output/bridgeOutput.txt";

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
        $str = '+';

        for ($i = 0; $i < $this->width; $i++) {
            $str .= '-';
        }

        $str .= '+';

        $this->println($str);
    }

    /**
     * @param string $string
     */
    private function println(string $string)
    {
        file_put_contents(self::FILE_PATH, $string . PHP_EOL, FILE_APPEND);
    }
}
