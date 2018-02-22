<?php

declare(strict_types=1);

namespace App\Validator;

/**
 * Interface ValidatorInterface
 * @package App\Validator
 */
interface ValidatorInterface
{
    /**
     * @param AbstractValidator $validator
     * @return ValidatorInterface
     */
    public function setNext(AbstractValidator $validator): ValidatorInterface;

    /**
     * @param string $input
     * @return bool
     */
    public function validate(string $input): bool;
}
