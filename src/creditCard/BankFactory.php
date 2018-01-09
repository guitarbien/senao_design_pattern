<?php

namespace App\creditCard;

/**
 * Class BankFactory
 * @package App\creditCard
 */
class BankFactory
{
    /**
     * @param $creditCardDTO
     * @return BankInterface
     */
    public static function create($creditCardDTO): BankInterface
    {
        return new NcccBank();
    }
}
