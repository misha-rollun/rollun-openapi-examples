<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Serializer;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello\OpenapiResponse;
use Laminas\Diactoros\Response;
use Laminas\Diactoros\Stream;
use Psr\Http\Message\ResponseInterface;

class ResponseConverter
{
    public function __construct(
        private Serializer $serializer,
    )
    {
    }

    public function convert(OpenapiResponse $response): ResponseInterface
    {
        $body = $this->createBodyFromString($this->serializer->serialize($response->body, $response->contentType));
        return new Response($body, $response->statusCode, [
            'content-type' => $response->contentType
        ]);
    }

    private function createBodyFromString(string $string): Stream
    {
        $body = new Stream('php://temp', 'wb+');
        $body->write($string);
        $body->rewind();
        return $body;
    }
}