<?php

namespace App\computer\builder;

use App\computer\AbstractComputer;
use App\computer\PC;
use App\computer\part\MotherBoard;
use App\computer\part\Cpu;
use App\computer\part\Ram;
use App\computer\part\Ssd;

/**
 * Class PCBuilder
 * @package App\computer\builder
 */
class PCBuilder implements IBuilder
{
    /** @var PC */
    private $pc;

    /**
     * 建立 Computer 物件
     */
    public function createComputer(): void
    {
        $this->pc = new PC();
    }

    /**
     * 設置 MB
     * 主機板只有一個
     */
    public function addMotherBoard(): void
    {
        $this->pc->setPart('MotherBoard', new MotherBoard);
    }

    /**
     * 設置 CPU
     */
    public function addCpu(): void
    {
        $this->pc->setPart('cpu', new Cpu);
    }

    /**
     * 設置 RAM
     */
    public function addRam(): void
    {
        $this->pc->setPart('ram', new Ram);
    }

    /**
     * 設置 SSD
     */
    public function addSsd(): void
    {
        $this->pc->setPart('ssd', new Ssd);
    }

    /**
     * @return AbstractComputer
     */
    public function getComputer(): AbstractComputer
    {
        return $this->pc;
    }
}