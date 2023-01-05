<?php

declare(strict_types=1);

namespace App\ErrorHandler;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\Exception\ValidationException;
use Laminas\Diactoros\Stream;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use rollun\logger\LifeCycleToken;

class ResponseGenerator
{
    public function __construct(private LifeCycleToken $lifeCycleToken)
    {
    }

    public function __invoke(\Throwable $e, ServerRequestInterface $request, ResponseInterface $response)
    {
        $instance = 'elastic.com/' . $this->lifeCycleToken->toString();
        switch (true) {
            case $e instanceof ValidationException:
                $body = [
                    "problem" => [
                        'type' => 'https://rollun.org/openapi/problem-type/validation-error',
                        'instance' => $instance,
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
                        'instance' => $instance,
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