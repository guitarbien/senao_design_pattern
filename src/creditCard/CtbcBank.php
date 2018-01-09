<?php

namespace App\creditCard;

/**
 * Class CtbcBank
 * @package App\creditCard
 */
class CtbcBank extends AbstractBank
{
    /** @const string */
    const CTBC_API_URL = 'xxx';

    /** @const string Cathay 驗證成功判斷值 */
    const SUCCESS_RESPONSE = 'success';

    /**
     * 實作各家銀行細節 send auth request
     * @return ResponseDTO
     */
    public function validate(): ResponseDTO
    {
        return $this->responseProcess('success');
    }

    /**
     * 實作各家銀行解析 response
     * @param string $response
     * @return ResponseDTO
     */
    protected function responseProcess(string $response): ResponseDTO
    {
        $result = false;
        if ($response === self::SUCCESS_RESPONSE) {
            $result = true;
        }

        return new ResponseDTO($result);
    }
}