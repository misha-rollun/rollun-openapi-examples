<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\App;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Http\Handler\GetHelloHandler;

abstract class RegisterRoutes
{
    protected array $routes = [
        [
            'path' => 'opeanapi/hello-world/v1/hello',
            'method' => 'GET',
            'handler' => GetHelloHandler::class
        ]
    ];

    abstract public function register(): void;
}