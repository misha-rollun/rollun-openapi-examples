<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Http\Handler;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Operation\GetHello\Request;
use Psr\Http\Message\ServerRequestInterface;

interface GetHelloHttpRequestConverter
{
    public function convert(ServerRequestInterface $request): Request;
}