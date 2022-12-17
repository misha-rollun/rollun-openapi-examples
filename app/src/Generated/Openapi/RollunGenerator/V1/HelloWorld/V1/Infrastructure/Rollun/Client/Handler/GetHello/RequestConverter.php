<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Client\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloRequestHeaders;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Request as OpenapiRequest;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Common\Handler\GetHello\Request;

class RequestConverter
{
    public function convert(Request $request): OpenapiRequest
    {
        $openapiRequest = new OpenapiRequest();
        $openapiRequest->headers = new GetHelloRequestHeaders();
        $openapiRequest->headers->contentType = 'application/vnd.rollun-request+json';
        $openapiRequest->queryParameters = $request->query;
        return $openapiRequest;
    }
}