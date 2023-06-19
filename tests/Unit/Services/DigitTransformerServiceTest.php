<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class DigitTransformerServiceTest extends TestCase
{
    public function testTransform()
    {
        /** @var \App\DigitTransformers\DigitTransformer $mockery */
        $mockery = Mockery::mock(\App\DigitTransformers\DigitTransformer::class)
            ->allows(['canTransform' => true, 'transform' => 'Test']);

        $digitTransformerService = new \App\Services\DigitTransformerService($mockery);
        $result = $digitTransformerService->transform(1, 2);
        $this->assertEquals(['Test', 'Test'], $result);
    }

    public function testCanNotTransform()
    {
        /** @var \App\DigitTransformers\DigitTransformer $mockery */
        $mockery = Mockery::mock(\App\DigitTransformers\DigitTransformer::class)
            ->allows(['canTransform' => false, 'transform' => 'Test']);

        $digitTransformerService = new \App\Services\DigitTransformerService($mockery);
        $result = $digitTransformerService->transform(1, 2);
        $this->assertEquals([1, 2], $result);
    }
}