<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Server\Factory;

use Generated\Openapi\RollunGenerator\V1\Common\Server\RoutesRegister;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Mezzio\Application;
use Psr\Container\ContainerInterface;

class RoutesRegisterFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new RoutesRegister(
            $container->get('config')['generated']['openapi']['rollunGenerator']['v1']['routes'],
            $container->get(Application::class)
        );
    }
}