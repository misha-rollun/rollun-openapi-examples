<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\ErrorHandler;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\Exception\ValidationException;
use Laminas\Diactoros\Response;
use Laminas\Diactoros\Stream;
use Psr\Http\Message\ResponseInterface;

class ErrorHandler
{
    public function handle(\Throwable $exception): ResponseInterface
    {
        if ($exception instanceof ValidationException) {
            return $this->handleValidationException($exception);
        }
        $body = [
            "problem" => [
                'type' => 'https://rollun.org/openapi/problem-type/internal-server-error',
                'instance' => 'urn:lifecycle-token:d9e35127e9b14201a2112b52e52508df',
                'status' => 500,
                'title' => 'Internal Server Error',
                'detail' => 'Internal Server Error'
            ]
        ];

        return new Response($this->createBodyFromString(json_encode($body)), 500, [
            'content-type' => 'application/vnd.rollun-error+json'
        ]);
    }

    private function handleValidationException(ValidationException $exception): ResponseInterface
    {
        $body = [
            "problem" => [
                'type' => 'https://rollun.org/openapi/problem-type/validation-error',
                'instance' => 'urn:lifecycle-token:d9e35127e9b14201a2112b52e52508df',
                'status' => 400,
                'title' => 'Validation error',
                'detail' => $exception->getMessage()
            ]
        ];

        return new Response($this->createBodyFromString(json_encode($body)), 400, [
            'content-type' => 'application/vnd.rollun-error+json'
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