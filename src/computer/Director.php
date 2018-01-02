<?php

namespace App\computer;

use App\computer\builder\IBuilder;
use App\computer\product\IProduct;
use App\computer\product\PC;

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
     * @return IComputer
     */
    public function build(): IComputer
    {
        $this->builder->createComputer();
        $this->builder->addMotherBoard();
        $this->builder->addCpu();
        $this->builder->addRam();
        $this->builder->addSsd();

        return $this->builder->getComputer();
    }
}