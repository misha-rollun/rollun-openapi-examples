<?php

declare(strict_types=1);

namespace App\Handler\Openapi\HelloWorld\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\HelloWorldResponse;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Common\Handler\GetHello\Request;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Common\Handler\GetHello\Result;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Server\Handler\GetHello\AbstractHandler;

class Handler extends AbstractHandler
{
    public function handle(Request $request): Result
    {
        $response = new HelloWorldResponse();
        $response->data = "Hello, {$request->query->name}";
        return $this->fulfilled($response);
    }
}