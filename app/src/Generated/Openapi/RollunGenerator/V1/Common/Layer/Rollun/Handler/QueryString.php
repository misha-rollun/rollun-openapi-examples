<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler;

class QueryString
{
    public function __construct(
        private readonly string $query,
        private readonly string $contentType
    ){
    }

    public function __toString(): string
    {
        return $this->query;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }
}