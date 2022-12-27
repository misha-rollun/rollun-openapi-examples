<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\DTO\Error;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\DTO\HelloWorldResponse;

class OpenapiResponse
{
    public HelloWorldResponse|Error $body;
    public string $contentType;
    public int $statusCode;
}