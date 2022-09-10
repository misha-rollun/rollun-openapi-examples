<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Parameter;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Openapi\Parameter\Parameter;
use Generated\Openapi\RollunGenerator\V1\Common\Layer\Openapi\Parameter\ParametersCollection;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Parameter\Enum\GetHelloQueryParameter;

class GetHelloParameters
{
    public function __construct(
        private readonly ParametersCollection $parameters
    ){
    }

    public function hasQueryParameter(GetHelloQueryParameter $parameter): bool
    {
        return $this->parameters->hasQueryParameter($parameter->value);
    }

    public function getQueryParameter(GetHelloQueryParameter $parameter): Parameter
    {
        return $this->parameters->getQueryParameter($parameter->value);
    }
}