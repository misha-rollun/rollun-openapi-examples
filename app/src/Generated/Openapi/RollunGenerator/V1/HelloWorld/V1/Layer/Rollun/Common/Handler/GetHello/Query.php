<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\ClientInfo;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Dto\GetHelloQuery;

class Query
{
    public function __construct(
        private readonly ClientInfo $clientInfo,
        private readonly GetHelloQuery $query
    ){
    }

    public function getClientInfo(): ClientInfo
    {
        return $this->clientInfo;
    }

    public function getQuery(): GetHelloQuery
    {
        return $this->query;
    }
}