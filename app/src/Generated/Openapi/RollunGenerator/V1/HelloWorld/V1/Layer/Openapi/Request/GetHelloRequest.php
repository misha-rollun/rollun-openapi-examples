<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Request;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Openapi\Request\RequestHasNotBody;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Parameter\GetHelloParameters;

class GetHelloRequest
{
    public function __construct(
        private readonly GetHelloParameters $getHelloParameters
    )
    {
    }

    public function getParameters(): GetHelloParameters
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