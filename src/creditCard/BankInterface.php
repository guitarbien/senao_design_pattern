<?php

namespace App\creditCard;

/**
 * interface BankInterface
 * @package App\creditCard
 */
interface BankInterface
{
    /**
     * @return ResponseDTO
     */
    public function validate(): ResponseDTO;
}
