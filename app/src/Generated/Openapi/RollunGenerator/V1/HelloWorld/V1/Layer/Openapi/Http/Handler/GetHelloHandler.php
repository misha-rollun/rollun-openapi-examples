<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Http\Handler;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Operation\GetHelloOperation;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class GetHelloHandler implements \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Http\Handler\GetHelloHandler
{
    public function __construct(
        private readonly GetHelloHttpRequestConverter $requestConverter,
        private readonly GetHelloOperation $operation,
        private readonly GetHelloResponseConverter $responseConverter
    ){
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $openapiRequest = $this->requestConverter->convert($request);
        $openapiResponse = $this->operation->perform($openapiRequest);
        return $this->responseConverter->convert($openapiResponse);
    }
}