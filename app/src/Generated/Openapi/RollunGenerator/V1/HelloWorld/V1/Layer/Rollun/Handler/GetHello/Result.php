<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Dto\HelloWorldResponse;

interface Result
{
    public function getResult(): HelloWorldResponse;

    public function getErrorInfo(): ErrorInfo;

    public function getLastState(): State;

    public function checkCurrentState(): State;
}