<?php


$container = [];

$container[\App\DigitTransformers\FizzTransformer::class] = function () {
    return new \App\DigitTransformers\FizzTransformer();
};

$container[\App\DigitTransformers\BuzzTransformer::class] = function () {
    return new \App\DigitTransformers\BuzzTransformer();
};

$container[App\Services\DigitTransformerService::class] = function () use ($container){
    return new App\Services\DigitTransformerService(
        $container[\App\DigitTransformers\FizzTransformer::class](),
        $container[\App\DigitTransformers\BuzzTransformer::class]()
    );
};

$container[\App\Controllers\FizzBuzzController::class] = function () use ($container) {
    return new \App\Controllers\FizzBuzzController($container[App\Services\DigitTransformerService::class]());
};

return $container;