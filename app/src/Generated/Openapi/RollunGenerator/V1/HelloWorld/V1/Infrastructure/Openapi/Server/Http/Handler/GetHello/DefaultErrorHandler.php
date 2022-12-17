<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Server\Http\Handler\GetHello;

use Psr\Http\Message\ResponseInterface;
use RuntimeException;
use Throwable;

class DefaultErrorHandler implements ErrorHandler
{
    public function handleException(Throwable $e): ResponseInterface
    {
        throw $e;
    }

    public function handleValidationError(array $errors): ResponseInterface
    {
        throw new RuntimeException('Validation error');
    }
}