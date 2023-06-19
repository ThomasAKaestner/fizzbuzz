<?php

namespace App\DigitTransformers;

use App\DigitTransformers\DigitTransformer;

class BuzzTransformer implements DigitTransformer
{
    public function transform($number): string
    {
        if (!($number % 5)) {
            return 'Buzz';
        }
        return $number;
    }

    public function canTransform($number): bool
    {
        if (is_numeric($number)) {
            return !($number % 5);
        }
        return false;
    }
}