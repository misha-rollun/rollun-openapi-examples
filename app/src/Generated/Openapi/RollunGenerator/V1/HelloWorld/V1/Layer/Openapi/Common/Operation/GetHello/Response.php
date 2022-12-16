<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\Error;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\GetHelloResponseHeaders;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\HelloWorldResponse;

class Response
{
    /**
     * В тайп хінті перераховані усі можливі варіанти body
     */
    public HelloWorldResponse|Error $body;
    public int $statusCode;
    public GetHelloResponseHeaders $headers;
}