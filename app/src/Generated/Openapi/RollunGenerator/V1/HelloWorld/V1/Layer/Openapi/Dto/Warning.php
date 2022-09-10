<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Dto;

class Warning
{
    public function __construct(
        private readonly string $type,
        private readonly string $title,
        private readonly string $detail
    )
    {
    }
}