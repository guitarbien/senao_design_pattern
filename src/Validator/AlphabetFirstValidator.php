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
    protected function childValidate(string $input): bool
    {
        return ctype_alpha($input[0]);
    }
}
