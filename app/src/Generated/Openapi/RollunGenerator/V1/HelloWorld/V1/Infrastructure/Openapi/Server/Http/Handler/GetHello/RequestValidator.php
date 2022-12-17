<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Server\Http\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Infrastructure\Openapi\Validator\ValidationError;
use Psr\Http\Message\ServerRequestInterface;

class RequestValidator
{
    /**
     * @return ValidationError[]
     */
    public function validate(ServerRequestInterface $request): array
    {
        // validate using \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Operation\GetHello\OperationSchema\OperationSchema::getSchema()
        return [];
    }
}