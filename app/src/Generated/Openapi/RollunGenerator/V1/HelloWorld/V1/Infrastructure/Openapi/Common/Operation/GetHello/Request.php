<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloQueryParameters;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloRequestHeaders;

class Request
{
    public GetHelloQueryParameters $queryParameters;
    public GetHelloRequestHeaders $headers;
}