<?php

namespace App\computer\builder;

use App\computer\AbstractComputer;
use App\computer\Laptop;
use App\computer\part\Cpu;
use App\computer\part\MotherBoard;
use App\computer\part\Ram;
use App\computer\part\Ssd;

/**
 * Class LaptopBuilder
 * @package App\computer\builder
 */
class LaptopBuilder implements IBuilder
{
    /** @var Laptop */
    private $laptop;

    /**
     * 建立 Computer 物件
     */
    public function createComputer(): void
    {
        $this->laptop = new Laptop();
    }

    /**
     * 設置 MB
     */
    public function addMotherBoard(): void
    {
        $this->laptop->setPart('MotherBoard', new MotherBoard('超棒主機板型號5566'));
    }

    /**
     * 設置 CPU
     */
    public function addCpu(): void
    {
        $this->laptop->setPart('cpu', new Cpu('超棒CPU規格'));
    }

    /**
     * 設置 RAM
     */
    public function addRam(): void
    {
        $this->laptop->setPart('ram', new Ram('8G'));
    }

    /**
     * 設置 SSD
     */
    public function addSsd(): void
    {
        $this->laptop->setPart('ssd', new Ssd('128G'));
    }

    /**
     * @return AbstractComputer
     */
    public function getComputer(): AbstractComputer
    {
        return $this->laptop;
    }
}