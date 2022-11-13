<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Dto;

class Warning
{
    public function __construct(
        public readonly string $type,
        public readonly string $title,
        public readonly string $detail
    )
    {
    }
}