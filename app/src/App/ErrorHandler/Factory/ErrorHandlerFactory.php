<?php

declare(strict_types=1);

namespace App\ErrorHandler\Factory;

use App\ErrorHandler\ResponseGenerator;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\Stratigility\Middleware\ErrorHandler;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;

class ErrorHandlerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new ErrorHandler($container->get(ResponseInterface::class), $container->get(ResponseGenerator::class));
    }
}