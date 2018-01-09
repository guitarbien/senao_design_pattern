<?php

namespace App\creditCard;

/**
 * interface BankInterface
 * @package App\creditCard
 */
interface BankInterface
{
    /**
     * @return ValidateDTO
     */
    public function validate(): ValidateDTO;
}
