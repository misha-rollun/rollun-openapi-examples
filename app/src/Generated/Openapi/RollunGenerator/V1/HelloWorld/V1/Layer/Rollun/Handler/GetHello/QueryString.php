<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\KeyValueQuery;

class QueryString extends KeyValueQuery
{
    /**
     * @return array{name:string}
     */
    public function getParsed(): array
    {
        return parent::getParsed();
    }
}