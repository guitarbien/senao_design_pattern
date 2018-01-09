<?php

use PHPUnit\Framework\TestCase;
use App\creditCard\CreditCardDTO;
use App\creditCard\BankFactory;
use App\creditCard\ValidateDTO;

/**
 * Class FactoryTest
 */
class FactoryTest extends TestCase
{
    public function test_呼叫NCCC取得驗證信用卡()
    {
        // arrange
        $creditCardDTO = new CreditCardDTO();

        $creditCardDTO->cardNo    = '1111222233334444';
        $creditCardDTO->cvc       = '567';
        $creditCardDTO->validThru = '1125';

        // act
        $resultDTO = BankFactory::create($creditCardDTO)->validate();

        // assert
        static::assertInstanceOf(ValidateDTO::class, $resultDTO);
    }
}
