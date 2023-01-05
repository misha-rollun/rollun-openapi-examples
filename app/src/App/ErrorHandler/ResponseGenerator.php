<?php

declare(strict_types=1);

namespace App\ErrorHandler;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\Exception\ValidationException;
use Laminas\Diactoros\Stream;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ResponseGenerator
{
    public function __invoke(\Throwable $e, ServerRequestInterface $request, ResponseInterface $response)
    {
        switch (true) {
            case $e instanceof ValidationException:
                $body = [
                    "problem" => [
                        'type' => 'https://rollun.org/openapi/problem-type/validation-error',
                        'instance' => 'urn:lifecycle-token:d9e35127e9b14201a2112b52e52508df',
                        'status' => 400,
                        'title' => 'Validation error',
                        'detail' => $e->getMessage()
                    ]
                ];
                $statusCode = 400;
                break;
            default:
                $body = [
                    "problem" => [
                        'type' => 'https://rollun.org/openapi/problem-type/internal-server-error',
                        'instance' => 'elastic/d9e35127e9b14201a2112b52e52508df',
                        'status' => 500,
                        'title' => 'Internal Server Error',
                        'detail' => 'Internal Server Error'
                    ]
                ];
                $statusCode = 500;
                break;
        }

        return $response
            ->withStatus($statusCode)
            ->withBody($this->createBodyFromString(json_encode($body)))
            ->withHeader('content-type', 'application/vnd.rollun-error+json');
    }

    private function createBodyFromString(string $string): Stream
    {
        $body = new Stream('php://temp', 'wb+');
        $body->write($string);
        $body->rewind();
        return $body;
    }
}