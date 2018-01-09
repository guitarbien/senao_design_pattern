<?php

namespace App\creditCard;

use MyCLabs\Enum\Enum;

/**
 * Class Bank
 * @package App\creditCard
 */
class Bank extends Enum
{
    const NCCC  = NcccBank::class;

    const CATHAY = CathayBank::class;
}
