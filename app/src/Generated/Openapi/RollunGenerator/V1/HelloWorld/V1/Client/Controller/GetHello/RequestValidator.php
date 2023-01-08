<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Controller\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\Exception\ValidationException;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\OperationAddress;
use Psr\Http\Message\ServerRequestInterface;

class RequestValidator
{
    public function __construct(
        private \Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\RequestValidator $validator
    ){
    }

    /**
     * @throws ValidationException
     */
    public function validate(ServerRequestInterface $request): void
    {
        $this->validator->validate(
            $request,
            realpath(__DIR__ . '/../../../Common/hello-world.yaml'),
            new OperationAddress('/hello', 'get')
        );
    }
}