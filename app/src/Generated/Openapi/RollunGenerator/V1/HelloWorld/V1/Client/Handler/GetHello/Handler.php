<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\HttpClient\HttpClient;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Handler implements RequestHandlerInterface
{
    public function __construct(private HttpClient $httpClient)
    {
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->httpClient->sendRequest($request);
    }
}