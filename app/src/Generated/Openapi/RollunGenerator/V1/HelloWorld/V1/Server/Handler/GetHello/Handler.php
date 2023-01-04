<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\ErrorHandler\ErrorHandler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Controller\GetHello\AbstractController;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Handler implements RequestHandlerInterface
{
    public function __construct(
        private ErrorHandler $errorHandler,
        private RequestValidator $requestValidator,
        private RequestConverter $requestConverter,
        private AbstractController $controller,
        private ResponseConverter $responseConverter,
        private ResponseValidator $responseValidator,
    )
    {
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        try {
            $this->requestValidator->validate($request);
            $openapiRequest = $this->requestConverter->convert($request);
            $openapiResponse = $this->controller->handle($openapiRequest);
            $response = $this->responseConverter->convert($openapiResponse);
            $this->responseValidator->validate($response);
            return $response;
        } catch (\Throwable $e) {
            return $this->errorHandler->handle($e);
        }
    }
}