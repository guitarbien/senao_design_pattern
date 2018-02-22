<?php

declare(strict_types=1);

namespace App\Validator;

/**
 * Class AlphabetFirstValidator
 * @package App\Validator
 */
final class AlphabetFirstValidator extends AbstractValidator
{
    /**
     * @param string $input
     * @return bool
     */
    public function validate(string $input): bool
    {
        if (!ctype_alpha($input[0])) {
            return false;
        }

        if (!isset($this->nextValidator)) {
            return true;
        }

        return $this->nextValidator->validate($input);
    }
}
