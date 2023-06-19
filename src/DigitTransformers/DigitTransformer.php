<?php

namespace App\DigitTransformers;

interface DigitTransformer
{
    public function transform($number): string;

    public function canTransform($number): bool;
}