<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Framework\Laminas\Rollun\Server\Openapi\Operation\GetHello\Factory;

use App\Handler\Openapi\HelloWorld\GetHello\Handler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Server\Openapi\Operation\GetHello\Operation;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Server\Openapi\Operation\GetHello\RequestConverter;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Server\Openapi\Operation\GetHello\ResultConverter;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class OperationFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new Operation(
            $container->get(RequestConverter::class),
            $container->get(Handler::class),
            $container->get(ResultConverter::class)
        );
    }
}