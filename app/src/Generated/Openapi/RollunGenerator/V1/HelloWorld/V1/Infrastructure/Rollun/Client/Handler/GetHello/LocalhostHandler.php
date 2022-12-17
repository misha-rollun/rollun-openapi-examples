<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Client\Handler\GetHello;

class LocalhostHandler extends AbstractHandler
{
    public function getUrl(): string
    {
        return 'http://localhost:8080/openapi/hello-world/v1';
    }
}