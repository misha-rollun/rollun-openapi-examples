<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler;

class ClientInfo
{
    public function __construct(
        public readonly string $language,
        public readonly string $userAgent,
    )
    {
    }
}