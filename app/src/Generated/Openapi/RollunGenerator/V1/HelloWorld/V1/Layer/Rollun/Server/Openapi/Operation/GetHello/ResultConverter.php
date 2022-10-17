<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Server\Openapi\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Operation\GetHello\Response;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Handler\GetHello\Result;

interface ResultConverter
{
    public function convert(Result $result): Response;
}