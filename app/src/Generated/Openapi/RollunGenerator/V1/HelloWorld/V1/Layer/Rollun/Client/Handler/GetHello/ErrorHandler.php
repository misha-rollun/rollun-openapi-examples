<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Client\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello\Response;

class ErrorHandler implements \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Client\Operation\GetHello\ErrorHandler
{
    public function handleValidationError(array $errors): Response
    {
        // TODO: return problem response
        throw new \Exception('Not implemented.');
    }
}