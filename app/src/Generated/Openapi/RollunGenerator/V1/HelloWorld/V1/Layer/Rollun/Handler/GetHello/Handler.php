<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\ProblemException;

interface Handler
{
    /**
     * @throws ProblemException
     */
    public function handle(Query $request): Result;
}