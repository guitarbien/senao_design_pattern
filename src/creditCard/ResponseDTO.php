<?php

namespace App\creditCard;

/**
 * Class ResponseDTO
 * @package App\creditCard
 */
class ResponseDTO
{
    /** @var bool 驗證結果 */
    private $result;

    /**
     * ResponseDTO constructor.
     * @param bool $result
     */
    public function __construct(bool $result)
    {
        $this->result = $result;
    }
}
