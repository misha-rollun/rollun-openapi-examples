<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Server\Openapi\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Request;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Response;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Common\Handler\GetHello\Handler;

class Operation implements \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Operation
{
    public function __construct(
        private RequestConverter $requestConverter,
        private Handler $handler,
        private ResultConverter $resultConverter
    )
    {
    }

    public function perform(Request $request): Response
    {
        $rollunRequest = $this->requestConverter->convert($request);
        $result = $this->handler->handle($rollunRequest);
        return $this->resultConverter->convert($result);
    }
}