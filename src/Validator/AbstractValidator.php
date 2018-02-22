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

    /**
     * 作為各個實作 ValidatorInterface 的 CoR 框架
     * @param string $input
     * @return bool
     */
    final public function validate(string $input): bool
    {
        if (!$this->childValidate($input)) {
            return false;
        }

        if (!isset($this->nextValidator)) {
            return true;
        }

        return $this->nextValidator->validate($input);
    }

    /**
     * @param string $input
     * @return bool
     */
    abstract protected function childValidate(string $input): bool;
}
