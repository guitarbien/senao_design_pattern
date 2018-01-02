<?php

namespace App\computer;

use App\computer\builder\IBuilder;

/**
 * Class Director
 * @package App\computer
 */
class Director
{
    /** @var IBuilder */
    private $builder;

    /**
     * Director constructor.
     * @param IBuilder $builder
     */
    public function __construct(IBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @return AbstractComputer
     */
    public function build(): AbstractComputer
    {
        $this->builder->createComputer();
        $this->builder->addMotherBoard();
        $this->builder->addCpu();
        $this->builder->addRam();
        $this->builder->addSsd();

        return $this->builder->getComputer();
    }
}