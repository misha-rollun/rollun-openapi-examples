<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\ClientInfo;

class Query
{
    public function __construct(
        private readonly ClientInfo $clientInfo,
        private readonly QueryString $queryString
    ){
    }

    public function getClientInfo(): ClientInfo
    {
        return $this->clientInfo;
    }

    public function getQueryString(): QueryString
    {
        return $this->queryString;
    }
}