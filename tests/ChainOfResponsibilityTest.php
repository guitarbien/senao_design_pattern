<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Validator\AlphabetFirstValidator;
use App\Validator\IntegerRestValidator;
use App\Validator\IdentifyNumberValidator;

/**
 * Class ChainOfResponsibilityTest
 */
class ChainOfResponsibilityTest extends TestCase
{
    public function test_身分證字號正確()
    {
        // arrange
        $idNumber = 'A123456789';

        $alphabetFirstValidator = new AlphabetFirstValidator();

        $alphabetFirstValidator->setNext(new IntegerRestValidator())
                               ->setNext(new IdentifyNumberValidator());

        // act
        $result = $alphabetFirstValidator->validate($idNumber);

        // assert
        static::assertTrue($result);
    }

    public function test_身分證字號字首應為英文()
    {
        // arrange
        $idNumber = '0123456789';

        $alphabetFirstValidator = new AlphabetFirstValidator();

        $alphabetFirstValidator->setNext(new IntegerRestValidator())
                               ->setNext(new IdentifyNumberValidator());

        // act
        $result = $alphabetFirstValidator->validate($idNumber);

        // assert
        static::assertFalse($result);
    }

    public function test_身分證字號字首之後都應為數字()
    {
        // arrange
        $idNumber = 'AA23456789';

        $alphabetFirstValidator = new AlphabetFirstValidator();

        $alphabetFirstValidator->setNext(new IntegerRestValidator())
                               ->setNext(new IdentifyNumberValidator());

        // act
        $result = $alphabetFirstValidator->validate($idNumber);

        // assert
        static::assertFalse($result);
    }

    public function test_身分證字號格式正確但規則錯誤()
    {
        // arrange
        $idNumber = 'A123456788';

        $alphabetFirstValidator = new AlphabetFirstValidator();

        $alphabetFirstValidator->setNext(new IntegerRestValidator())
                               ->setNext(new IdentifyNumberValidator());

        // act
        $result = $alphabetFirstValidator->validate($idNumber);

        // assert
        static::assertFalse($result);
    }
}
