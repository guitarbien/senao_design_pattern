<?php

namespace App\creditCard;

use MyCLabs\Enum\Enum;

/**
 * Class Bank
 * @package App\creditCard
 */
class Bank extends Enum
{
    /** @const string NCCC */
    const NCCC  = NcccBank::class;

    /** @const string 國泰 */
    const CATHAY = CathayBank::class;

    /** @const string 中信 */
    const CTBC = CtbcBank::class;
}
