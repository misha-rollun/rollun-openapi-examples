<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Operation\GetHello\Operation;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Handler implements \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Http\Handler\GetHello\Handler
{
    public function __construct(
        private readonly RequestConverter $requestConverter,
        private readonly Operation $operation,
        private readonly ResponseConverter $responseConverter
    ){
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $openapiRequest = $this->requestConverter->convert($request);
        $openapiResponse = $this->operation->perform($openapiRequest);
        return $this->responseConverter->convert($openapiResponse);
    }
}