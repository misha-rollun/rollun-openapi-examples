<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Server\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Infrastructure\Rollun\Handler\Status;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\Error;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\HelloWorldResponse;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Common\Handler\GetHello\Handler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Common\Handler\GetHello\Result;

abstract class AbstractHandler implements Handler
{
    protected function fulfilled(HelloWorldResponse $response): Result
    {
        return new Result(Status::fulfilled(), $response);
    }

    protected function rejected(Error $error): Result
    {
        return new Result(Status::rejected(), $error);
    }

    protected function pending(string $taskId): Result
    {
        return new Result(Status::pending(), $taskId);
    }
}