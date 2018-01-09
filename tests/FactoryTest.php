<?php

use App\creditCard\NcccBank;
use App\creditCard\CathayBank;
use PHPUnit\Framework\TestCase;
use App\creditCard\CreditCardDTO;
use App\creditCard\BankFactory;
use App\creditCard\ValidateDTO;

/**
 * Class FactoryTest
 */
class FactoryTest extends TestCase
{
    public function test_呼叫NCCC驗證信用卡()
    {
        // arrange
        $creditCardDTO = new CreditCardDTO();

        $creditCardDTO->cardNo    = '1111222233334444';
        $creditCardDTO->cvc       = '567';
        $creditCardDTO->validThru = '1125';

        // act
        $bank = BankFactory::create($creditCardDTO);
        $resultDTO = $bank->validate();

        // assert
        static::assertInstanceOf(NcccBank::class, $bank);
        static::assertInstanceOf(ValidateDTO::class, $resultDTO);
    }

    public function test_呼叫國泰驗證信用卡()
    {
        // arrange
        $creditCardDTO = new CreditCardDTO();

        $creditCardDTO->cardNo    = '5555666677778888';
        $creditCardDTO->cvc       = '567';
        $creditCardDTO->validThru = '1125';

        // act
        $bank      = BankFactory::create($creditCardDTO);
        $resultDTO = $bank->validate();

        // assert
        static::assertInstanceOf(CathayBank::class, $bank);
        static::assertInstanceOf(ValidateDTO::class, $resultDTO);
    }
}
