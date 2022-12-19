<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Client\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer\QuerySerializer;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Serializer;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Request;
use Laminas\Diactoros\ServerRequest;
use Laminas\Diactoros\Stream;
use Psr\Http\Message\ServerRequestInterface;

class RequestConverter
{
    public function __construct(
        private Serializer $serializer,
        private QuerySerializer $querySerializer
    ){
    }

    public function convert(Request $request, string $url): ServerRequestInterface
    {
        $headers = $this->serializer->normalize($request->headers);
        $queryParamsArray = $this->serializer->normalize($request->queryParameters);
        $queryParamsString = $this->querySerializer->serialize($queryParamsArray, 'form', false);
        $fullUrl = $url . $queryParamsString;
        return new ServerRequest([], [], $fullUrl,'GET', 'php://input', $headers);
    }
}