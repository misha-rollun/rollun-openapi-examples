<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Server\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\Problem;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Dto\HelloWorldResponse;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello\Handler;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello\Result;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello\ResultFactory;

abstract class AbstractHandler implements Handler
{
    public function __construct(
        protected ResultFactory $resultFactory
    ){
    }

    protected function fulfilled(HelloWorldResponse $response): Result
    {
        return $this->resultFactory->createFulfilled($response);
    }

    protected function rejected(Problem $problem): Result
    {
        return $this->resultFactory->createRejected($problem);
    }
}