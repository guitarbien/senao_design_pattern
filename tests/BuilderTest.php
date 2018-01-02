<?php

use App\computer\part\Cpu;
use App\computer\part\MotherBoard;
use App\computer\part\Ram;
use App\computer\part\Ssd;
use PHPUnit\Framework\TestCase;
use App\computer\builder\PCBuilder;
use App\computer\builder\LaptopBuilder;
use App\computer\Director;
use App\computer\PC;
use App\computer\Laptop;

/**
 * Class BuilderTest
 */
class BuilderTest extends TestCase
{
    public function test_可以打造PC()
    {
        // arrange
        $pcBuilder = new PCBuilder();

        // act
        $pc = (new Director($pcBuilder))->build();

        // assert
        static::assertInstanceOf(PC::class, $pc);
        static::assertInstanceOf(MotherBoard::class, $pc->getSpec()['MotherBoard'][0]);
        static::assertInstanceOf(Cpu::class, $pc->getSpec()['cpu'][0]);
        static::assertInstanceOf(Ram::class, $pc->getSpec()['ram'][0]);
        static::assertInstanceOf(Ssd::class, $pc->getSpec()['ssd'][0]);
    }

    public function test_可以打造laptop()
    {
        // arrange
        $laptopBuilder = new LaptopBuilder();

        // act
        $laptop = (new Director($laptopBuilder))->build();

        // assert
        static::assertInstanceOf(Laptop::class, $laptop);
        static::assertInstanceOf(MotherBoard::class, $laptop->getSpec()['MotherBoard'][0]);
        static::assertInstanceOf(Cpu::class, $laptop->getSpec()['cpu'][0]);
        static::assertInstanceOf(Ram::class, $laptop->getSpec()['ram'][0]);
        static::assertInstanceOf(Ssd::class, $laptop->getSpec()['ssd'][0]);
    }
}
