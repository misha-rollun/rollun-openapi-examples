<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Server\Http\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer\QuerySerializer;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Serializer;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloQueryParameters;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloRequestHeaders;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Request;
use Psr\Http\Message\ServerRequestInterface;

class RequestConverter
{
    public function __construct(
        private Serializer $serializer,
        private QuerySerializer $querySerializer
    )
    {
    }

    public function convert(ServerRequestInterface $request): Request
    {
        $openapiRequest = new Request();
        $queryParamsArray = $this->querySerializer->deserialize($request->getUri()->getQuery(), 'form', false);
        $openapiRequest->queryParameters = $this->serializer
            ->toObject(GetHelloQueryParameters::class)
            ->denormalize($queryParamsArray);
        $openapiRequest->headers = $this->serializer
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