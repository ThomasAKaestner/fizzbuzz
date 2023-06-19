<?php

namespace App\DigitTransformers;

use App\DigitTransformers\DigitTransformer;

class FizzTransformer implements DigitTransformer
{
    public function transform($number): string
    {
        if (!($number % 3)) {
            return 'Fizz';
        }
        return $number;
    }

    public function canTransform($number): bool
    {
        if (is_numeric($number)) {

            return !($number % 3);
        }
        return false;
    }
}