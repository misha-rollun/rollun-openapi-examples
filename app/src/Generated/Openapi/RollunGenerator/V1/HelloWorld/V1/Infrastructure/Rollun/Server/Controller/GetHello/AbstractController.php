<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Server\Controller\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Infrastructure\Rollun\Handler\Status;
use Generated\Openapi\RollunGenerator\V1\Common\Infrastructure\Rollun\Handler\TaskInfo;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\Error;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\HelloWorldResponse;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Common\Controller\GetHello\Controller;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Common\Controller\GetHello\Result;

abstract class AbstractController implements Controller
{
    protected function fulfilled(HelloWorldResponse $response): Result
    {
        return new Result(Status::fulfilled(), $response);
    }

    protected function rejected(Error $error): Result
    {
        return new Result(Status::rejected(), null, $error);
    }

    protected function pending(string $taskId, ?int $retryAfter = null): Result
    {
        $taskInfo = new TaskInfo();
        $taskInfo->id = $taskId;
        if ($retryAfter !== null) {
            $taskInfo->retryAfter = $retryAfter;
        }
        return new Result(Status::pending(), null,null, $taskInfo);
    }
}