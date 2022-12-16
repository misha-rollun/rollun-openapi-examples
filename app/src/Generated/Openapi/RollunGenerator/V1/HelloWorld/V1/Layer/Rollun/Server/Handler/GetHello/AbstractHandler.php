<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Server\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\Status;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\Error;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\HelloWorldResponse;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello\Handler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello\Result;

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