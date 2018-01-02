<?php

namespace App\computer;

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
     * @param string $value
     */
    public function setPart(string $key, $value)
    {
        $this->data[$key][] = $value;
    }
}