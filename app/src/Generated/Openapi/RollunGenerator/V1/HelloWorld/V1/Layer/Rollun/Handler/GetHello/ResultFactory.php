<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\Problem;
use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\State;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Dto\HelloWorldResponse;

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
        return new Result(State::fulfilled, $response);
    }

    public function createRejected(Problem $problem): Result
    {
        return new Result(State::rejected, null, $problem);
    }
}