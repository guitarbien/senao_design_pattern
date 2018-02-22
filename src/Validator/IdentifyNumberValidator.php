<?php

declare(strict_types=1);

namespace App\Validator;

/**
 * Class IdentifyNumberValidator
 * @package App\Validator
 */
final class IdentifyNumberValidator extends AbstractValidator
{
    /**
     * 身分證規則檢核
     * @param string $idNumber
     * @return bool
     */
    public function validate(string $idNumber): bool
    {
        // Alphabet value
        $alphabetMapping = [
            'A' => 10,
            'B' => 11,
            'C' => 12,
            'D' => 13,
            'E' => 14,
            'F' => 15,
            'G' => 16,
            'H' => 17,
            'I' => 34,
            'J' => 18,
            'K' => 19,
            'L' => 20,
            'M' => 21,
            'N' => 22,
            'O' => 35,
            'P' => 23,
            'Q' => 24,
            'R' => 25,
            'S' => 26,
            'T' => 27,
            'U' => 28,
            'V' => 29,
            'W' => 32,
            'X' => 30,
            'Y' => 31,
            'Z' => 33,
        ];

        $multipleList = [1, 9, 8, 7, 6, 5, 4, 3, 2, 1, 1];

        // 將 A123456789 的字首根據 alphabetMapping 轉為 10123456789
        $idValueString = $alphabetMapping[$idNumber[0]] . substr($idNumber, 1, 9);

        // 使用 for 讓 string 可以直接以 [$i] 取得該順序的字元
        $sum = 0;
        for ($i = 0; $i < count($multipleList); $i++) {
            $sum += (int)$idValueString[$i] * $multipleList[$i];
        }

        // 若能整除於 10 則為合法身分證字號
        $result = ($sum % 10 === 0);

        if (!$result) {
            return $result;
        }

        if (!isset($this->nextValidator)) {
            return true;
        }

        return $this->nextValidator->validate($idNumber);
    }
}
