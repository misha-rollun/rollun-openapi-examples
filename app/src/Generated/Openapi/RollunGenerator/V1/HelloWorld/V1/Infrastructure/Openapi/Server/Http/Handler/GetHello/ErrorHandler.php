<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Server\Http\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\ValidationError;
use Psr\Http\Message\ResponseInterface;
use Throwable;

/**
 * Error handler створюється для кожної операції, тому що в маніфесті різні операції можуть мати різний формат помилки
 */
interface ErrorHandler
{
    public function handleException(Throwable $e): ResponseInterface;

    /**
     * @param ValidationError[] $errors
     */
    public function handleValidationError(array $errors): ResponseInterface;
}