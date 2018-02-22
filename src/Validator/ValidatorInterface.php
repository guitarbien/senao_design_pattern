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
     * @param ValidatorInterface $validator
     * @return ValidatorInterface
     */
    public function setNext(ValidatorInterface $validator): ValidatorInterface;

    /**
     * @param string $input
     * @return bool
     */
    public function validate(string $input): bool;
}
