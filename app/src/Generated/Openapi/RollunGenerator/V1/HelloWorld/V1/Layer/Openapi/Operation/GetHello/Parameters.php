<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Openapi\Parameter\Parameter;
use Generated\Openapi\RollunGenerator\V1\Common\Layer\Openapi\Parameter\ParametersCollection;

class Parameters
{
    public function __construct(
        private readonly ParametersCollection $parameters
    ){
    }

    public function hasQueryParameter(string $name): bool
    {
        return $this->parameters->hasQueryParameter($name);
    }

    public function getQueryParameter(string $name): Parameter
    {
        return $this->parameters->getQueryParameter($name);
    }

    // same for headers, path and cookie
}