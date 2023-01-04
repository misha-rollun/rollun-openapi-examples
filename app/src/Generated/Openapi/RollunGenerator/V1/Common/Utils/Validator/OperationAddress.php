<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator;

class OperationAddress
{
    public function __construct(
        public string $path,
        public string $method
    ){
        $this->method = strtolower($this->method);
    }
}