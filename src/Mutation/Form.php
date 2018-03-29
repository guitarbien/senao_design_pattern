<?php

declare(strict_types=1);

namespace App\Mutation;

/**
 * Class Form
 * @package App\Mutation
 */
final class Form
{
    /** @var string[] */
    private $errors = [];

    /**
     * @return bool
     */
    public function hasError(): bool
    {
        return count($this->errors) > 0;
    }

    /**
     * @param string $errorMsg
     */
    public function addErrors(string $errorMsg): void
    {
        $this->errors[] = $errorMsg;
    }
}
