<?php

namespace App\creditCard;

/**
 * Class AbstractBank
 * @package App\creditCard
 */
abstract class AbstractBank implements BankInterface
{
    /** @var CreditCardDTO */
    protected $creditCardDTO;

    /**
     * CathayBank constructor.
     * @param CreditCardDTO $creditCardDTO
     */
    public function __construct(CreditCardDTO $creditCardDTO)
    {
        $this->creditCardDTO = $creditCardDTO;
    }

    /**
     * @param CreditCardDTO $creditCardDTO
     * @return ResponseDTO
     */
    protected function sendRequest(CreditCardDTO $creditCardDTO): ResponseDTO
    {
        return new ResponseDTO();
    }
}
