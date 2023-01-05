<?php

namespace Generated\Openapi\RollunGenerator\V1\Common\Server;

use Mezzio\Application;

class RoutesRegister
{
    public function __construct(
        private array $routes,
        private Application $application
    )
    {
    }

    public function register(): void
    {
        foreach ($this->routes as $route) {
            $this->application->route($route['path'], $route['handler'], [$route['method']]);
        }
    }
}