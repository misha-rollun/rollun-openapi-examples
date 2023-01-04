<?php

declare(strict_types=1);

namespace App\Openapi\Controller;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello\OpenapiRequest;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello\OpenapiResponse;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\DTO\HelloWorldResponse;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Controller\GetHello\AbstractController;

class GetHelloController extends AbstractController
{
    public function handle(OpenapiRequest $request): OpenapiResponse
    {
        $body = new HelloWorldResponse();
        $body->data = 'Hello, ' . $request->query->name;
        return $this->createSuccessResponse($body);
    }
}