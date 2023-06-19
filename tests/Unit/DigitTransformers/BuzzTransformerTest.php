<?php
declare(strict_types=1);

namespace Tests\Unit\DigitTransformers;

use PHPUnit\Framework\TestCase;

class BuzzTransformerTest extends TestCase
{
    /** @test */
    public function testCanTransform()
    {
        $transformer = new \App\DigitTransformers\BuzzTransformer();
        $this->assertTrue($transformer->canTransform(5));
        $this->assertFalse($transformer->canTransform(4));
        $this->assertFalse($transformer->canTransform('Buzz'));
    }

    /** @test */
    public function testTransform()
    {
        $transformer = new \App\DigitTransformers\BuzzTransformer();
        $this->assertEquals('Buzz', $transformer->transform(5));
    }
}