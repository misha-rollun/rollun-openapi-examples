<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\KeyValueQuery;

class Query
{
    public function __construct(
        private readonly QueryString $queryString
    ){
    }

    public function getQueryString(): QueryString
    {
        return $this->queryString;
    }
}