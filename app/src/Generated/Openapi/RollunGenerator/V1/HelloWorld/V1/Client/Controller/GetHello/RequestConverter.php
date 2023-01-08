<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Controller\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer\QuerySerializer;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Serializer;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello\OpenapiRequest;
use Laminas\Diactoros\ServerRequest;
use Laminas\Diactoros\Uri;
use Psr\Http\Message\ServerRequestInterface;

class RequestConverter
{
    public function __construct(
        private QuerySerializer $querySerializer,
        private Serializer $serializer
    ){
    }

    public function convert(OpenapiRequest $request, string $baseUrl): ServerRequestInterface
    {
        $queryArray = $this->serializer->normalize($request->query);
        $query = $this->querySerializer->serialize($queryArray, [
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

        return (new ServerRequest())
            ->withUri(new Uri($baseUrl . '/hello' . '?' . $query))
            ->withQueryParams($queryArray);
    }
}