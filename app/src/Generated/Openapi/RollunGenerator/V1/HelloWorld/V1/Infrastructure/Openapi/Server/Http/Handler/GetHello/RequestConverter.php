<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Server\Http\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Denormalizer;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloQueryParameters;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloRequestHeaders;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Request;
use Psr\Http\Message\ServerRequestInterface;

class RequestConverter
{
    public function __construct(
        private Denormalizer $denormalizer
    )
    {
    }

    public function convert(ServerRequestInterface $request): Request
    {
        $openapiRequest = new Request();
        $openapiRequest->queryParameters = $this->denormalizer
            ->toObject(GetHelloQueryParameters::class)
            ->denormalize($request->getQueryParams());
        $openapiRequest->headers = $this->denormalizer
            ->toObject(GetHelloRequestHeaders::class)
            ->denormalize($this->prepareHeaders($request->getHeaders()));
        return $openapiRequest;
    }

    private function prepareHeaders(array $headers): array
    {
        $result = [];
        foreach ($headers as $name => $value) {
            $result[$name] = implode(' ', $value);
        }
        return $result;
    }
}