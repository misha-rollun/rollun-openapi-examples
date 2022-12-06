<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\GetHelloResponseHeaders;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\HelloWorldResponse;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\Problem;

class Response
{
    /**
     * В тайп хінті перераховані усі можливі варіанти body
     */
    public HelloWorldResponse|Problem $body;
    public int $statusCode;
    public GetHelloResponseHeaders $headers;
}