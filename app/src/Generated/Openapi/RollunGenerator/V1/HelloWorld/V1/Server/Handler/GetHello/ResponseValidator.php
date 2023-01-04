<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\Exception\ValidationException;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\OperationAddress;
use Psr\Http\Message\ResponseInterface;

class ResponseValidator
{
    public function __construct(
        private \Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\ResponseValidator $validator
    ){
    }

    /**
     * @throws ValidationException
     */
    public function validate(ResponseInterface $response): void
    {
        $this->validator->validate(
            $response,
            realpath(__DIR__ . '/../../../Common/hello-world.yaml'),
            new OperationAddress('/hello', 'get')
        );
    }
}