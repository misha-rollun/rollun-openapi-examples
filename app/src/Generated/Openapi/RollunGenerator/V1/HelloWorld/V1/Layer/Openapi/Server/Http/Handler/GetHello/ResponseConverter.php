<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello\Response;
use Psr\Http\Message\ResponseInterface;

class ResponseConverter
{
    public function convert(Response $response): ResponseInterface
    {
        throw new \Exception('Not implemented');
    }
}