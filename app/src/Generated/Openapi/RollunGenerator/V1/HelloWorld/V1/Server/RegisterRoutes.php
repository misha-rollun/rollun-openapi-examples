<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Handler\GetHello\Handler;
use Mezzio\Application;

class RegisterRoutes
{
    protected array $routes = [
        [
            'path' => '/opeanapi/hello-world/v1/hello',
            'method' => 'GET',
            'handler' => Handler::class
        ]
    ];

    public function __construct(private Application $application)
    {
    }

    public function register(): void
    {
        foreach ($this->routes as $route) {
            $this->application->route($route['path'], $route['handler'], [$route['method']]);
        }
    }
}