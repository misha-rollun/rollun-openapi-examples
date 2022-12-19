<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Client\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Serializer;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\Error;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloRequestHeaders;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\HelloWorldResponse;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Response;
use Psr\Http\Message\ResponseInterface;

class ResponseConverter
{
    public function __construct(private Serializer $serializer)
    {
    }

    public function convert(ResponseInterface $response): Response
    {
        $openapiResponse = new Response();
        $openapiResponse->statusCode = $response->getStatusCode();
        $openapiResponse->headers = $this->serializer
            ->toObject(GetHelloRequestHeaders::class)
            ->denormalize($this->prepareHeaders($response->getHeaders()));
        switch ($openapiResponse->headers->contentType) {
            case 'application/vnd.rollun+json:':
                $openapiResponse->body = $this->serializer
                    ->toObject(HelloWorldResponse::class)
                    ->deserialize((string)$response->getBody(), $openapiResponse->headers->contentType);
                break;
            case 'application/vnd.rollun-error+json':
                $openapiResponse->body = $this->serializer
                    ->toObject(Error::class)
                    ->deserialize((string)$response->getBody(), $openapiResponse->headers->contentType);
                break;
            default:
                throw new \InvalidArgumentException('Unsupported content type');
        }
        return $openapiResponse;
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