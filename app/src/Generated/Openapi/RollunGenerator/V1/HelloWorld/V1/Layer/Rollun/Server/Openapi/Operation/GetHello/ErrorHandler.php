<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Server\Openapi\Operation\GetHello;

use Psr\Http\Message\ResponseInterface;
use Throwable;

// TODO: implement returning application/problem+json response
class ErrorHandler implements \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello\ErrorHandler
{
    public function handleException(Throwable $e): ResponseInterface
    {
        throw new \Exception('Not implemented');
    }

    public function handleValidationError(array $errors): ResponseInterface
    {
        throw new \Exception('Not implemented');
    }
}