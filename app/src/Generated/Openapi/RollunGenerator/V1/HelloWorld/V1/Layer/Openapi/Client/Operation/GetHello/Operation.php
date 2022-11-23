<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Client\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Http\Client\Handler\GetHello\Handler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello\Request;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello\Response;

class Operation implements \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello\Operation
{
    private string $path = '/hello';
    private string $serverUrl;

    public function __construct(
        private RequestConverter $requestConverter,
        private Handler $handler,
        private ResponseConverter $responseConverter,
        private ResponseValidator $responseValidator,
        private ErrorHandler $errorHandler
    ){
    }

    public function perform(Request $request): Response
    {
        $httpRequest = $this->requestConverter->convert($request, $this->serverUrl . $this->path);
        $response = $this->handler->handle($httpRequest);
        if ($errors = $this->responseValidator->validate($response)) {
            return $this->errorHandler->handleValidationError($errors);
        }
        return $this->responseConverter->convert($response);
    }

    public function setServerUrl(string $url): void
    {
        $this->serverUrl = $url;
    }
}