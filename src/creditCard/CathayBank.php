<?php

namespace App\creditCard;

/**
 * Class CathayBank
 * @package App\creditCard
 */
class CathayBank extends AbstractBank
{
    /** @const string Cathay 驗證成功判斷值 */
    const SUCCESS_RESPONSE = 'good';

    /**
     * @return ResponseDTO
     */
    public function validate(): ResponseDTO
    {
        // 示意實作 soap，此處直接當做得到回傳值了
        // $soapClient = new SoapClient();
        // $result = $soapClient->auth(json_encode($this->creditCardDTO));
        $result = 'good';

        return $this->responseProcess($result);
    }

    /**
     * 示意解析 Cathay response
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
