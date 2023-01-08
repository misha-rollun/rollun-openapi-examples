<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Controller\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Serializer;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello\OpenapiResponse;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;

class ResponseConverter
{
    public function __construct(
        private Serializer $serializer
    ){
    }

    public function convert(ResponseInterface $response): OpenapiResponse
    {
        switch ($response->getHeaderLine('content-type')) {
            case 'application/vnd.rollun-error+json':
                $body = $this->serializer->deserialize(
                    (string)$response->getBody(),
                    \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\DTO\Error::class,
                    'application/vnd.rollun-error+json'
                );
                break;
            case 'application/vnd.rollun+json':
                $body = $this->serializer->deserialize(
                    (string)$response->getBody(),
                    \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\DTO\HelloWorldResponse::class,
                    'application/vnd.rollun+json'
                );
                break;
            default:
                throw new InvalidArgumentException('Unsupported content type.');
        }

        $openapiResponse = new OpenapiResponse();
        $openapiResponse->body = $body;
        $openapiResponse->statusCode = $response->getStatusCode();
        $openapiResponse->contentType = $response->getHeaderLine('content-type');
        return $openapiResponse;
    }
}