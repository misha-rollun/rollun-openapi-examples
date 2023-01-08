<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Controller\GetHello\Factory;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Controller\GetHello\AbstractController;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Controller\GetHello\RequestConverter;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Controller\GetHello\RequestValidator;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Controller\GetHello\ResponseConverter;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Controller\GetHello\ResponseValidator;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Handler\GetHello\Handler;
use Laminas\ServiceManager\Factory\AbstractFactoryInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class AbstractControllerFactory implements AbstractFactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new $requestedName(
            $container->get(RequestValidator::class),
            $container->get(RequestConverter::class),
            $container->get(Handler::class),
            $container->get(ResponseValidator::class),
            $container->get(ResponseConverter::class)
        );
    }

    public function canCreate(ContainerInterface $container, $requestedName)
    {
        $result = is_a($requestedName, AbstractController::class, true);
        return $result;
    }
}