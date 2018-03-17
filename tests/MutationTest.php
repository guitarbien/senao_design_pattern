<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Mutation\Form;
use App\Mutation\AdultFilter;

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

    // another example
    public function test_過濾年紀為18歲以上有1人()
    {
        // arrange
        $users = [
            ['age' => 20],
            ['age' => 15],
        ];

        $adultFilter = new AdultFilter();

        // act
        $adults = $adultFilter->exec($users);

        // assert
        static::assertCount(1, $adults);
    }

    public function test_過濾年紀為18歲以上有1人_包含18歲()
    {
        // arrange
        $users = [
            ['age' => 18],
            ['age' => 15],
            ['age' => 14],
        ];

        $adultFilter = new AdultFilter();

        // act
        $adults = $adultFilter->exec($users);

        // assert
        static::assertCount(1, $adults);
    }
}
