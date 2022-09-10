<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Operation;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Request\GetHelloRequest;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Response\GetHelloResponse;

interface GetHelloOperation
{
    public function perform(GetHelloRequest $request): GetHelloResponse;
}