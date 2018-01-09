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
     * 實作各家銀行細節 send auth request
     * @return ResponseDTO
     */
    abstract public function validate(): ResponseDTO;

    /**
     * 實作各家銀行解析 response
     * @param string $response
     * @return ResponseDTO
     */
    abstract protected function responseProcess(string $response): ResponseDTO;
}
