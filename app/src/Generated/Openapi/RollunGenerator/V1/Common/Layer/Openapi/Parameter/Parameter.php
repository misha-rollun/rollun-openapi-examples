<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Layer\Openapi\Parameter;

class Parameter
{
    public function __construct(
        private string $name,
        private object $value,
    ){
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): object
    {
        return $this->value;
    }
}