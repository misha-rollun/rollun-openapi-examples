<?php

declare(strict_types=1);

namespace App\ErrorHandler\Factory;

use App\ErrorHandler\ResponseGenerator;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;
use rollun\logger\LifeCycleToken;

class ResponseGeneratorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new ResponseGenerator($container->get(LifeCycleToken::class));
    }
}