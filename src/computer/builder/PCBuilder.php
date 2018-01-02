<?php

namespace App\computer\builder;

use App\computer\IComputer;

/**
 * Class PCBuilder
 * @package App\computer\builder
 */
class PCBuilder implements IBuilder
{
    /**
     * 建立 Computer 物件
     */
    public function createComputer(): void
    {
        // TODO: Implement createComputer() method.
    }

    /**
     * 設置 MB
     */
    public function addMotherBoard(): void
    {
        // TODO: Implement addMotherBoard() method.
    }

    /**
     * 設置 CPU
     */
    public function addCpu(): void
    {
        // TODO: Implement addCpu() method.
    }

    /**
     * 設置 RAM
     */
    public function addRam(): void
    {
        // TODO: Implement addRam() method.
    }

    /**
     * 設置 SSD
     */
    public function addSsd(): void
    {
        // TODO: Implement addSsd() method.
    }

    /**
     * @return IComputer
     */
    public function getComputer(): IComputer
    {
        // TODO: Implement getComputer() method.
    }
}