<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Client\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Infrastructure\Rollun\Handler\Status;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Response;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Common\Handler\GetHello\Result;

class ResponseConverter
{
    public function convert(Response $response): Result
    {
        if ($response->statusCode === 200) {
            return new Result(
                Status::fulfilled(),
                $response->body,
            );
        } elseif ($response->statusCode == 202) {
            return new Result(
                Status::pending(),
                null,
                null,
                $response->headers->resourceId
            );
        } elseif ($response->statusCode >= 400 && $response->statusCode <= 599) {
            return new Result(
                Status::rejected(),
                null,
                $response->body
            );
        } else {
            throw new \RuntimeException('Unsupported status code.');
        }
    }
}