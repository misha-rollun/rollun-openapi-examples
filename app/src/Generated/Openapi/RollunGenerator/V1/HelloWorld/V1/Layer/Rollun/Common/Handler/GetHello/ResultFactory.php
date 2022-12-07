<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\Status;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Dto\Error;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Dto\HelloWorldResponse;

/**
 * Сенс цієї фабрики буде зрозумілий при асинхроних операціях, коли в конструктор Result також треба буде передавати
 * об'єкт Handler
 *
 * Метод createPending відсутній, оскільки операція синхронна
 */
class ResultFactory
{
    public function createFulfilled(HelloWorldResponse $response): Result
    {
        return new Result(Status::fulfilled, $response);
    }

    public function createRejected(Error $error): Result
    {
        return new Result(Status::rejected, null, $error);
    }
}