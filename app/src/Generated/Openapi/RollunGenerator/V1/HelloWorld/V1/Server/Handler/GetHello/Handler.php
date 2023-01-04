<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Controller\GetHello\AbstractController;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Handler implements RequestHandlerInterface
{
    public function __construct(
        private RequestConverter $requestConverter,
        private AbstractController $controller,
        private ResponseConverter $responseConverter,
    )
    {
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $openapiRequest = $this->requestConverter->convert($request);
        $openapiResponse = $this->controller->handle($openapiRequest);
        return $this->responseConverter->convert($openapiResponse);
    }
}