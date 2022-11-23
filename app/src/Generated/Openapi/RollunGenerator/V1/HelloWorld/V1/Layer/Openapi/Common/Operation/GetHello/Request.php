<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\GetHelloQueryParameters;

class Request
{
    public function __construct(
        public readonly GetHelloQueryParameters $getHelloQueryParameters
    )
    {
    }
}