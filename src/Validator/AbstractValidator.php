<?php

declare(strict_types=1);

namespace App\Validator;

/**
 * Class AbstractValidator
 * @package App\Validator
 */
abstract class AbstractValidator implements ValidatorInterface
{
    /** @var ValidatorInterface */
    protected $nextValidator;

    /**
     * @param ValidatorInterface $validator
     * @return ValidatorInterface
     */
    public function setNext(ValidatorInterface $validator): ValidatorInterface
    {
        $this->nextValidator = $validator;

        return $validator;
    }
}
