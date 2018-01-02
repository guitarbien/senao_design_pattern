<?php

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
    }

    public function test_可以打造laptop()
    {
        // arrange
        $laptopBuilder = new LaptopBuilder();

        // act
        $laptop = (new Director($laptopBuilder))->build();

        // assert
        $this->assertInstanceOf(Laptop::class, $laptop);
    }
}
