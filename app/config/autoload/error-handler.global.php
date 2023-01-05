<?php

declare(strict_types=1);

return [
    'dependencies' => [
        'factories' => [
            \Laminas\Stratigility\Middleware\ErrorHandler::class => \App\ErrorHandler\Factory\ErrorHandlerFactory::class,
            \App\ErrorHandler\ResponseGenerator::class => \App\ErrorHandler\Factory\ResponseGeneratorFactory::class
        ]
    ]
];