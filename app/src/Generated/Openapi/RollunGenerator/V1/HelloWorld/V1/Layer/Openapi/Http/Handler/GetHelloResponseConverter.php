<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Http\Handler;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Operation\GetHello\Response;
use Psr\Http\Message\ResponseInterface;

interface GetHelloResponseConverter
{
    public function convert(Response $response): ResponseInterface;
}