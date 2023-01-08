<?php

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Handler\GetHello\Handler;

return [
    'generated' => [
        'openapi' => [
            'rollunGenerator' => [
                "v1" => [
                    "routes" => [
                        [
                            'path' => '/openapi/hello-world/v1/hello',
                            'method' => 'GET',
                            'handler' => Handler::class
                        ]
                    ]
                ]
            ]
        ]
    ]
];