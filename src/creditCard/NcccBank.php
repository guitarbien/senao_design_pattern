<?php

namespace App\creditCard;

/**
 * Class NcccBank
 * @package App\creditCard
 */
class NcccBank extends AbstractBank
{
    /** @const string */
    const NCCC_API_URL = 'xxx';

    /** @const string Cathay 驗證成功判斷值 */
    const SUCCESS_RESPONSE = 'OK';

    /**
     * @return ResponseDTO
     */
    public function validate(): ResponseDTO
    {
        // 示意實作 curl post，此處直接當做得到回傳值了
        // $result = $this->post(self::NCCC_API_URL, json_encode($this->creditCardDTO));
        $result = 'OK';

        return $this->responseProcess($result);
    }

    /**
     * 示意解析 NCCC response
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
