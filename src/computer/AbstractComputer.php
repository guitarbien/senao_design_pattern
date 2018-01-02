<?php

namespace App\computer;

use App\computer\part\AbstractSpec;

/**
 * Class Computer
 * @package App\computer\product
 */
abstract class AbstractComputer
{
    /** @var array */
    private $data = [];

    /**
     * @param string $key
     * @param AbstractSpec $value
     */
    public function setPart(string $key, AbstractSpec $value)
    {
        $this->data[$key][] = $value;
    }

    /**
     * 回傳詳細規格 (for test assert)
     * @return array
     */
    public function getSpec(): array
    {
        return $this->data;
    }
}