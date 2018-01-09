<?php

namespace App\creditCard;

class NcccBank implements BankInterface
{

    /**
     * NcccBank constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return ValidateDTO
     */
    public function validate(): ValidateDTO
    {
        return new ValidateDTO();
    }
}
