<?php

namespace App\computer\part;

/**
 * Class AbstractSpec
 * @package App\computer\part
 */
abstract class AbstractSpec
{
    /** @var string */
    private $spec = '';

    /**
     * MotherBoard constructor.
     * @param string $spec
     */
    public function __construct(string $spec)
    {
        $this->spec = $spec;
    }
}