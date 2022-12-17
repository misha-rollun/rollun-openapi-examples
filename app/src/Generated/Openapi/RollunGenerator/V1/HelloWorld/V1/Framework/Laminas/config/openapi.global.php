<?php

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Framework\Laminas\Layer\Openapi\Server\Http\Handler\GetHello\Factory\HandlerFactory;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello\DefaultErrorHandler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello\ErrorHandler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello\Handler;

return [
    'dependencies' => [
        'aliases' => [
            ErrorHandler::class => DefaultErrorHandler::class,
        ],
        'factories' => [
            Handler::class => HandlerFactory::class,
        ]
    ],
];