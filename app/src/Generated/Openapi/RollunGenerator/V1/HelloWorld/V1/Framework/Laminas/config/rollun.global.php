<?php

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Framework\Laminas\Layer\Rollun\Server\Openapi\Operation\GetHello\Factory\OperationFactory;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello\ErrorHandler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Server\Openapi\Operation\GetHello\Operation;

return [
    'dependencies' => [
        'aliases' => [
            ErrorHandler::class => \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Server\Http\Handler\GetHello\ErrorHandler::class
        ],
        'factories' => [
            Operation::class => OperationFactory::class
        ]
    ]
];