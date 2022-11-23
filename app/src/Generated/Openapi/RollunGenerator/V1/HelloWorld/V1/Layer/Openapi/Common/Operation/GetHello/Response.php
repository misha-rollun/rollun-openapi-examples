<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\HelloWorldResponse;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\Problem;

class Response
{
    private array $responses = [
        200 => [
            'content' => [
                'application/vnd.rollun+json' => [
                    'schema' => HelloWorldResponse::class
                ]
            ]
        ],
        400 => [
            'content' => [
                'application/problem+json' => [
                    'schema' => Problem::class
                ]
            ]
        ],
        500 => [
            'content' => [
                'application/problem+json' => [
                    'schema' => Problem::class
                ]
            ]
        ],
        503 => [
            'content' => [
                'application/problem+json' => [
                    'schema' => Problem::class
                ]
            ]
        ]
    ];

    public function __construct(
        public readonly mixed $body,
        public readonly int $statusCode,
        public readonly array $headers = [],
    )
    {
        // validate response is in $this->response
    }
}