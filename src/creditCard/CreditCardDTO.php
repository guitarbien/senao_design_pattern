<?php

namespace App\creditCard;

/**
 * Class CreditCardDTO
 * @package App\creditCard
 */
class CreditCardDTO
{
    /** @var string 信用卡號 */
    public $cardNo;

    /** @var string 檢核碼 */
    public $cvc;

    /** @var string 有效期(月年) */
    public $validThru;

    /**
     * 取得信用卡號前六碼
     * @return string
     */
    public function getBinFromCardNo(): string
    {
        return substr($this->cardNo, 0, 6);
    }
}
