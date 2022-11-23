<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello;

final class OperationSchema
{
    private const SCHEMA = [
        '/hello' => [
            'get' => [
                'parameters' => [
                    'in' => 'query',
                    'name' => 'name',
                    'schema' => [
                        'type' => 'string'
                    ]
                ],
                'responses' => [
                    200 => [
                        'content' => [
                            'application/vnd.rollun+json',
                            'schema' => [
                                'type' => 'object'
                                // schema description
                            ]
                        ]
                    ],
                    // other responses
                ]
            ]
        ]
    ];

    public static function getSchema(): array
    {
        return static::SCHEMA;
    }
}