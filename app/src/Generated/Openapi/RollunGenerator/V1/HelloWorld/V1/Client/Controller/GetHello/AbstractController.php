<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Controller\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello\Controller;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello\OpenapiRequest;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello\OpenapiResponse;
use Psr\Http\Server\RequestHandlerInterface;

abstract class AbstractController implements Controller
{
    public function __construct(
        private RequestValidator $requestValidator,
        private RequestConverter $requestConverter,
        private RequestHandlerInterface $handler,
        private ResponseValidator $responseValidator,
        private ResponseConverter $responseConverter,
    ){
    }

    public function handle(OpenapiRequest $request): OpenapiResponse
    {
        $psrRequest = $this->requestConverter->convert($request, $this->getServerUrl());
        $this->requestValidator->validate($psrRequest);
        $psrResponse = $this->handler->handle($psrRequest);
        $this->responseValidator->validate($psrResponse);
        return $this->responseConverter->convert($psrResponse);
    }

    abstract protected function getServerUrl(): string;
}