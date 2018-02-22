<?php

declare(strict_types=1);

namespace App\Validator;

/**
 * Class IntegerRestValidator
 * @package App\Validator
 */
final class IntegerRestValidator extends AbstractValidator
{
    /**
     * @param string $input
     * @return bool
     */
    public function validate(string $input): bool
    {
        for ($i = 1; $i < strlen($input); $i++) {
            if (!is_numeric($input[$i])) {
                return false;
            }
        }

        if (!isset($this->nextValidator)) {
            return true;
        }

        return $this->nextValidator->validate($input);
    }
}
