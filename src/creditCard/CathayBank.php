<?php

namespace App\creditCard;

/**
 * Class CathayBank
 * @package App\creditCard
 */
class CathayBank extends AbstractBank
{
    /**
     * @return ResponseDTO
     */
    public function validate(): ResponseDTO
    {
        return $this->sendRequest($this->creditCardDTO);
    }
}
