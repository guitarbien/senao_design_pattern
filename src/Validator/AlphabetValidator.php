<?php

namespace App\Validator;

/**
 * Class AlphabetValidator
 * @package App\Validator
 */
final class AlphabetValidator
{
    /**
     * @param $param
     * @return AlphabetValidator
     */
    public function setNext($param): self
    {
        return $this;
    }

    /**
     * @param string $idNumber
     * @return bool
     */
    public function validate(string $idNumber): bool
    {
        return true;
    }
}
