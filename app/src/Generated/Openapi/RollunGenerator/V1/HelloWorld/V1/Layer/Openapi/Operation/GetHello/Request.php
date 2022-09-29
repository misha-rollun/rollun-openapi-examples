<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Openapi\Request\RequestHasNotBody;

class Request
{
    public function __construct(
        private readonly Parameters $getHelloParameters
    )
    {
    }

    public function getParameters(): Parameters
    {
        return $this->getHelloParameters;
    }

    public function hasBody(): bool
    {
        return false;
    }

    public function getBody(): object
    {
        throw new RequestHasNotBody();
    }
}