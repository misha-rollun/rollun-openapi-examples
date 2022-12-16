<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Framework\Laminas;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Framework\Laminas\Layer\Openapi\Server\Http\Handler\GetHello\Factory\HandlerFactory;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Framework\Laminas\Layer\Rollun\Server\Openapi\Operation\GetHello\Factory\OperationFactory;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\GetHelloQueryParameters;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\GetHelloRequestHeaders;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello\ErrorHandler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello\Handler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Server\Openapi\Operation\GetHello\Operation;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'dependencies' => [
                'aliases' => [
                    ErrorHandler::class => \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Server\Http\Handler\GetHello\ErrorHandler::class
                ],
                'factories' => [
                    Handler::class => HandlerFactory::class,
                    Operation::class => OperationFactory::class
                ]
            ],
        ];
    }
}