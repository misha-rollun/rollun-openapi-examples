<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Client\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Infrastructure\Openapi\Validator\ValidationError;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Response;

interface ErrorHandler
{
    /**
     * @param ValidationError[] $errors
     */
    public function handleValidationError(array $errors): Response;
}