<?php

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Framework\Laminas\Openapi\Server\Http\Handler\GetHello\Factory\HandlerFactory;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloQueryParameters;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloRequestHeaders;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Server\Http\Handler\GetHello\DefaultErrorHandler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Server\Http\Handler\GetHello\ErrorHandler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Server\Http\Handler\GetHello\Handler;

return [
    'dependencies' => [
        'aliases' => [
            ErrorHandler::class => DefaultErrorHandler::class,
        ],
        'factories' => [
            Handler::class => HandlerFactory::class,
        ]
    ],
    'serializer' => [
        'metadata' => [
            GetHelloQueryParameters::class => [
                'properties' => [
                    // назва поля в об'єкті
                    'name' => [
                        // назва поля в маніфесті
                        'name' => 'name'
                    ]
                ]
            ],
            GetHelloRequestHeaders::class => [
                'properties' =>
                [
                    'contentType' => [
                        // Хедери повинні бути в lowercase не дивлячись на те що в маніфесті вони можуть бути в
                        // верхньому регістрі.
                        'name' => 'content-type'
                    ]
                ]
            ]
            // тут повинна бути описана кожна dto з .../Openapi/Common/Dto
        ]
    ]
];