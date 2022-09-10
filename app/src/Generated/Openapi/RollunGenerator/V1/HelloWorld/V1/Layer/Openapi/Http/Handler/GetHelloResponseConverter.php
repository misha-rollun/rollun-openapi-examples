<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Http\Handler;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Response\GetHelloResponse;
use Psr\Http\Message\ResponseInterface;

interface GetHelloResponseConverter
{
    public function convert(GetHelloResponse $response): ResponseInterface;
}