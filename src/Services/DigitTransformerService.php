<?php

namespace App\Services;

use App\DigitTransformers\DigitTransformer;

class DigitTransformerService
{
    private $transformers;

    public function __construct(DigitTransformer ...$transformers)
    {
        $this->transformers = $transformers;
    }

    public function transform(int $start = 1, int $end = 100 ): array
    {
        $result = [];

        for ($i = $start; $i <= $end; $i++) {
            $transformed = false;
            $transformedValue = $i;

            foreach ($this->transformers as $transformer) {
                if ($transformer->canTransform($transformedValue)) {
                    $transformedValue = $transformer->transform($transformedValue);
                    $transformed = true;
                }
            }

            $result[] = $transformed ? $transformedValue : $i;
        }

        return $result;
    }
}