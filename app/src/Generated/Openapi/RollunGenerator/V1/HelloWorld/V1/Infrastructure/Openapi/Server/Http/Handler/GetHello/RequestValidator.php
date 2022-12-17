<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Server\Http\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\ValidationError;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\OperationSchema;
use Psr\Http\Message\ServerRequestInterface;

class RequestValidator
{
    public function __construct(
        private \Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\RequestValidator $validator
    ){
    }

    /**
     * @return ValidationError[]
     */
    public function validate(ServerRequestInterface $request): array
    {
        return $this->validator->validate($request, OperationSchema::getSchema());
    }
}