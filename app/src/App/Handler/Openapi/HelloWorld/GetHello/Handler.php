<?php

declare(strict_types=1);

namespace App\Handler\Openapi\HelloWorld\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\HelloWorldResponse;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello\Query;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello\Result;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Server\Handler\GetHello\AbstractHandler;

class Handler extends AbstractHandler
{
    public function handle(Query $request): Result
    {
        $response = new HelloWorldResponse();
        $response->data = "Hello, {$request->query->name}";
        return $this->fulfilled($response);
    }
}