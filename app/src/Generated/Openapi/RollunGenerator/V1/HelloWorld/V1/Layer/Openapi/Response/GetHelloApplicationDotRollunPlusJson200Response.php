<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Response;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Dto\HelloWorldResponse;

class GetHelloApplicationDotRollunPlusJson200Response implements GetHelloResponse
{
    public function __construct(
        public readonly array $headers,
        public readonly HelloWorldResponse $responseBody
    )
    {
    }
}