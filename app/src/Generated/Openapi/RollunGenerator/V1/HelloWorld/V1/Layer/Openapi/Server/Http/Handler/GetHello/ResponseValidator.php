<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Server\Http\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Openapi\Validator\ValidationError;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Operation\GetHello\Response;

interface ResponseValidator
{
    /**
     * @return ValidationError[]
     */
    public function validate(Response $response): array;
}