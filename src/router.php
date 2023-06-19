<?php
// Using the container class to load the controller and the service
// Doing simple routing here

use App\Controllers\FizzBuzzController;

$container = require __DIR__ . '/container.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => ['class' => FizzBuzzController::class, 'function' => 'index'],
];

if (array_key_exists($uri, $routes)) {
    $class = $container[$routes[$uri]['class']]();
    $functionName = $routes[$uri]['function'];

    echo $class->$functionName();
} else {
    http_response_code(404);
    die();
}