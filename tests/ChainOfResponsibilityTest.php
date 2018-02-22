<?php

use PHPUnit\Framework\TestCase;
use App\Validator\AlphabetValidator;
use App\Validator\IntegerValidator;
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

        // act
        $result = (new AlphabetValidator())->setNext(new IntegerValidator())
                                           ->setNext(new IdentifyNumberValidator())
                                           ->validate($idNumber);

        // assert
        static::assertTrue($result);
    }
}
