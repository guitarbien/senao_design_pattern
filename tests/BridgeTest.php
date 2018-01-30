<?php

use PHPUnit\Framework\TestCase;
use App\Printer\ConsolePrinter;
use App\Printer\FilePrinter;
use App\Printer\Document;
use App\Printer\RepeatDocument;
use App\Printer\RandomTimesDocument;

/**
 * Class BridgeTest
 */
class BridgeTest extends TestCase
{
    public function test_可以列印字串_console()
    {
        // arrange
        $consolePrinter = new ConsolePrinter("Hello World!");
        $document = new Document($consolePrinter);

        // act
        $document->display();

        // assert
        $expected = "+------------+\n|Hello World!|\n+------------+\n";
        $this->assertStringStartsWith($expected, $this->getActualOutput());
    }

    public function test_可以以不同實作列印字串_console()
    {
        // arrange
        $consolePrinter = new ConsolePrinter("Hello Taiwan!");
        $repeatDocument = new RepeatDocument($consolePrinter);

        // act
        $repeatDocument->display();

        // assert
        $expected = "+-------------+\n|Hello Taiwan!|\n+-------------+\n";
        $this->assertStringStartsWith($expected, $this->getActualOutput());
    }

    public function test_可以指定次數列印字串_console()
    {
        // arrange
        $consolePrinter = new ConsolePrinter("Hello Taiwan!");
        $repeatDocument = new RepeatDocument($consolePrinter);

        // act
        $repeatDocument->printTimes(2);

        // assert
        $expected = "+-------------+\n|Hello Taiwan!|\n|Hello Taiwan!|\n+-------------+\n";
        $this->assertStringStartsWith($expected, $this->getActualOutput());
    }

    public function test_可以列印字串_file()
    {
        // arrange
        file_put_contents(FilePrinter::FILE_PATH, "");
        $plainText = new FilePrinter("Hello Taiwan!");
        $document = new Document($plainText);

        // act
        $document->display();

        // assert
        $expected = "+-------------+\n|Hello Taiwan!|\n+-------------+\n";

        $actual = file_get_contents(FilePrinter::FILE_PATH);
        $this->assertEquals($expected, $actual);
    }

    public function test_可以指定次數列印字串_file()
    {
        // arrange
        file_put_contents(FilePrinter::FILE_PATH, "");
        $plainText = new FilePrinter("Hello Taiwan!");
        $repeatDocument = new RepeatDocument($plainText);

        // act
        $repeatDocument->printTimes(2);

        // assert
        $expected = "+-------------+\n|Hello Taiwan!|\n|Hello Taiwan!|\n+-------------+\n";

        $actual = file_get_contents(FilePrinter::FILE_PATH);
        $this->assertEquals($expected, $actual);
    }

    public function test_可以列印隨機次數_console()
    {
        // arrange
        $consolePrinter = new ConsolePrinter("Hello World!");
        $randomTimesDocument = new RandomTimesDocument($consolePrinter);

        // act
        $randomTimesDocument->show();

        // assert
        $actual = count(explode("|Hello World!|", $this->getActualOutput())) - 1;
        $this->assertLessThanOrEqual(RandomTimesDocument::MAX_TIMES, $actual);
    }

    public function test_可以列印隨機次數_file()
    {
        // arrange
        file_put_contents(FilePrinter::FILE_PATH, "");
        $filePrinter = new FilePrinter("Hello World!");
        $randomTimesDocument = new RandomTimesDocument($filePrinter);

        // act
        $randomTimesDocument->show();

        // assert
        $actual = count(explode("|Hello World!|", $this->getActualOutput())) - 1;
        $this->assertLessThanOrEqual(RandomTimesDocument::MAX_TIMES, $actual);

        $content = file_get_contents(FilePrinter::FILE_PATH);
        $actual = count(explode("|Hello World!|", $content)) - 1;
        $this->assertLessThanOrEqual(RandomTimesDocument::MAX_TIMES, $actual);
    }
}
