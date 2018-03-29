<?php

declare(strict_types=1);

namespace App\Mutation;

/**
 * Class AdultFilter
 * @package App\Mutation
 */
final class AdultFilter
{
    const ADULT_AGE = 18;

    /**
     * @param array $users
     * @return array
     */
    public function exec(array $users): array
    {
        return collect($users)->filter(function($item){
            return $item['age'] >= self::ADULT_AGE;
        })->toArray();
    }
}
