<?php

namespace Tests\Unit\DigitTransformers;

use PHPUnit\Framework\TestCase;

class FizzTransformerTest extends TestCase
{
    public function testCanTransform()
    {
        $transformer = new \App\DigitTransformers\FizzTransformer();
        $this->assertTrue($transformer->canTransform(3));
        $this->assertFalse($transformer->canTransform(4));
        $this->assertFalse($transformer->canTransform('Fizz'));
    }
}