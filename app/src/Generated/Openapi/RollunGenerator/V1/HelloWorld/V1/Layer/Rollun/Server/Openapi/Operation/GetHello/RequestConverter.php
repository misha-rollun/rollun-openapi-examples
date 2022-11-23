<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Server\Openapi\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello\Request;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello\Query;

interface RequestConverter
{
    public function convert(Request $request): Query;
}