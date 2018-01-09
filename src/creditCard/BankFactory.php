<?php

namespace App\creditCard;

use Exception;

/**
 * Class BankFactory
 * @package App\creditCard
 */
class BankFactory
{
    /**
     * @param CreditCardDTO $creditCardDTO
     * @return BankInterface
     * @throws Exception
     */
    public static function create(CreditCardDTO $creditCardDTO): BankInterface
    {
        $bank = self::findBank($creditCardDTO->getBinFromCardNo())->getValue();

        return new $bank($creditCardDTO);
    }

    /**
     * @param string $binCode
     * @return Bank
     * @throws Exception
     */
    private static function findBank(string $binCode): Bank
    {
        $bankMapping = [
            '111122' => new Bank(Bank::NCCC),
            '555566' => new Bank(Bank::CATHAY),
            '999988' => new Bank(Bank::CTBC),
            // and so on ...
        ];

        if (!array_key_exists($binCode, $bankMapping)) {
            throw new Exception("Can't find a bank from the bin code : " . $binCode);
        }

        return $bankMapping[$binCode];
    }
}
