<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Operation\GetHello\Request;
use Psr\Http\Message\ServerRequestInterface;

interface RequestConverter
{
    public function convert(ServerRequestInterface $request): Request;
}