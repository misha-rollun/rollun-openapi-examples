<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Controller\GetHello\Controller;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Handler implements \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Handler\GetHello\Handler
{
    public function __construct(
        private RequestConverter $requestConverter,
        private Controller $controller,
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