<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Client\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Client\Operation\GetHello\Operation;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello\Query;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello\Result;

abstract class AbstractHandler implements \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello\Handler
{
    public function __construct(
        private RequestConverter $requestConverter,
        private Operation $operation,
        private ResponseConverter $responseConverter,
    ){
    }

    public function handle(Query $request): Result
    {
        $openapiRequest = $this->requestConverter->convert($request);
        $this->operation->setServerUrl($this->getUrl());
        $openapiResponse = $this->operation->perform($openapiRequest);
        return $this->responseConverter->convert($openapiResponse);
    }

    abstract public function getUrl(): string;
}