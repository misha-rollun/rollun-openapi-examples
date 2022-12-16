<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Normalizer;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Serializer;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello\Response;
use Laminas\Diactoros\Stream;
use Psr\Http\Message\ResponseInterface;

class ResponseConverter
{
    public function __construct(
        private Serializer $serializer,
        private Normalizer $normalizer
    ){
    }

    public function convert(Response $response): ResponseInterface
    {
        $body = $this->createBodyFromString($this->serializer->serialize($response->body, $response->headers->contentType));
        $headers = $this->normalizer->normalize($response->headers);
        return new \Laminas\Diactoros\Response($body, $response->statusCode, $headers);
    }

    private function createBodyFromString(string $string): Stream
    {
        $body = new Stream('php://temp', 'wb+');
        $body->write($string);
        $body->rewind();

        return $body;
    }
}