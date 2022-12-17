<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Client\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Response;

class ErrorHandler implements \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Client\Operation\GetHello\ErrorHandler
{
    public function handleValidationError(array $errors): Response
    {
        // TODO: return problem response
        throw new \Exception('Not implemented.');
    }
}