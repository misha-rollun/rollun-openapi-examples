<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\ClientInfo;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto\GetHelloQueryParameters;

class Request
{
    public ClientInfo $clientInfo;
    public GetHelloQueryParameters $query;

    // Для POST, PATCH, PUT запитів також генерується поле $body
}