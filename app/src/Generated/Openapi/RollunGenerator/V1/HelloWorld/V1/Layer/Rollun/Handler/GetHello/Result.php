<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\Problem;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Dto\HelloWorldResponse;

interface Result
{
    public function getResult(): ?HelloWorldResponse;

    public function getProblem(): ?Problem;

    public function getLastState(): State;

    public function checkCurrentState(): State;
}