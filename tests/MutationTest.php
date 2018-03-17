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
        // arrange
        $form = new Form();
        $form->addErrors('email is required');

        // act
        $result = $form->hasError();

        // assert
        static::assertTrue($result);
    }

    public function test_表單處理沒有發生錯誤()
    {
        // arrange
        $form = new Form();

        // act
        $result = $form->hasError();

        // assert
        static::assertFalse($result);
    }
}
