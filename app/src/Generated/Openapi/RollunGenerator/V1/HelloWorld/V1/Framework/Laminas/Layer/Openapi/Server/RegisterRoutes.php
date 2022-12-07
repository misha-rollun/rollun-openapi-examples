<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Framework\Laminas\Layer\Openapi\Server;

use Mezzio\Application;

class RegisterRoutes extends \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\RegisterRoutes
{
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