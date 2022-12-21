<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Server\Openapi\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloResponseHeaders;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Response;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Common\Controller\GetHello\Result;

class ResultConverter
{
    public function convert(Result $result): Response
    {
        $response = new Response();
        $response->headers = new GetHelloResponseHeaders();
        switch (true) {
            case $result->getStatus()->isFulfilled():
                $response->headers->contentType = 'application/vnd.rollun+json';
                $response->statusCode = 200;
                $response->body = $result->getResult();
                break;
            case $result->getStatus()->isRejected();
                $response->headers->contentType = 'application/vnd.rollun-error+json';
                $response->statusCode = $result->getError()->problem->status;
                $response->body = $result->getError();
                break;
        }
        return $response;
    }
}