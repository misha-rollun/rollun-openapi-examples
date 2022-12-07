<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello\Operation;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Throwable;

class Handler implements \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Http\Common\Handler\GetHello\Handler
{
    public function __construct(
        private RequestValidator $requestValidator,
        private RequestConverter $requestConverter,
        private Operation $operation,
        private ResponseValidator $responseValidator,
        private ResponseConverter $responseConverter,
        private ErrorHandler $errorHandler
    ){
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        try {
            return $this->tryToHandle($request);
        } catch (Throwable $e) {
            return $this->errorHandler->handleException($e);
        }
    }

    private function tryToHandle(ServerRequestInterface $request): ResponseInterface
    {
        if ($errors = $this->requestValidator->validate($request)) {
            return $this->errorHandler->handleValidationError($errors);
        }
        $openapiRequest = $this->requestConverter->convert($request);
        $openapiResponse = $this->operation->perform($openapiRequest);
        $httpResponse = $this->responseConverter->convert($openapiResponse);
        if ($errors = $this->responseValidator->validate($httpResponse)) {
            return $this->errorHandler->handleValidationError($errors);
        }
        return $httpResponse;
    }
}