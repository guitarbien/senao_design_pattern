<?php

declare(strict_types=1);

namespace App\Decorator;

/**
 * Class BankType
 * @package App\Decorator
 */
abstract class BankType
{
    private function __construct() {}

    /** @var string */
    const CTBC = '中信';

    /** @var string */
    const TAISHIN = '台新';

    /** @var string */
    const CITI = '花旗';
}
