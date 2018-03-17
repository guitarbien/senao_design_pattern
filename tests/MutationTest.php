<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Mutation\Form;

/**
 * Class MutationTest
 */
class MutationTest extends TestCase
{
    public function test_表單處理發生錯誤()
    {
        $form = new Form();
        $result = $form->hasError();

        static::assertTrue($result);
    }
}
