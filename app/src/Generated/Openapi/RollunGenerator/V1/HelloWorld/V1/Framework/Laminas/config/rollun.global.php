<?php

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Framework\Laminas\Rollun\Server\Openapi\Operation\GetHello\Factory\OperationFactory;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Server\Http\Handler\GetHello\ErrorHandler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Server\Openapi\Operation\GetHello\Operation;

return [
    'dependencies' => [
        'aliases' => [
            ErrorHandler::class => \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Server\Http\Handler\GetHello\ErrorHandler::class
        ],
        'factories' => [
            Operation::class => OperationFactory::class
        ]
    ]
];