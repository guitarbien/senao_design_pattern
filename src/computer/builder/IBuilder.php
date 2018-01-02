<?php

namespace App\computer\builder;

use App\computer\AbstractComputer;

/**
 * Class IBuilder
 * @package App\computer\builder
 */
interface IBuilder
{
    /**
     * 建立 Computer 物件
     */
    public function createComputer(): void;

    /**
     * 設置 MB
     */
    public function addMotherBoard(): void;

    /**
     * 設置 CPU
     */
    public function addCpu(): void;

    /**
     * 設置 RAM
     */
    public function addRam(): void;

    /**
     * 設置 SSD
     */
    public function addSsd(): void;

    /**
     * @return AbstractComputer
     */
    public function getComputer(): AbstractComputer;
}