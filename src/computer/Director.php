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
    /**
     * @param IBuilder $builder
     * @return IProduct
     */
    public function build(IBuilder $builder): IProduct
    {
        return new PC();
    }
}