<?php

namespace App\Controllers;

use App\Services\DigitTransformerService;

class FizzBuzzController
{
    public function __construct(private DigitTransformerService $digitTransformerService)
    {
    }

    public function index()
    {
        return implode("<br>", $this->digitTransformerService->transform());
    }
}