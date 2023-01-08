<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\HttpClient;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HttpClient
{
    public function __construct(private Client $client)
    {
    }

    public function sendRequest(ServerRequestInterface $request): ResponseInterface
    {
        return $this->client->send($request);
    }
}