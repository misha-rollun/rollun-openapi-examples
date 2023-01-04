<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer\QuerySerializer;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Serializer;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello\OpenapiRequest;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\DTO\GetHelloQueryParameters;
use Psr\Http\Message\ServerRequestInterface;

class RequestConverter
{
    public function __construct(
        private QuerySerializer $querySerializer,
        private Serializer $serializer,
    )
    {
    }

    public function convert(ServerRequestInterface $request): OpenapiRequest
    {
        $openapiRequest = new OpenapiRequest();
        $queryArray = $this->querySerializer->deserialize($request->getUri()->getQuery(), [
            [
                'in' => 'query',
                'name' => 'name',
                'style' => 'form',
                'explode' => false,
                'schema' => [
                    'type' => 'string'
                ]
            ]
        ]);
        $openapiRequest->query = $this->serializer->denormalize($queryArray, GetHelloQueryParameters::class);
        return $openapiRequest;
    }
}