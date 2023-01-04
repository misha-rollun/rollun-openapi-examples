<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\Exception\ValidationException;
use League\OpenAPIValidation\PSR7\Exception\ValidationFailed;
use Psr\Http\Message\ServerRequestInterface;

class RequestValidator
{
    /**
     * @throws ValidationException
     */
    public function validate(ServerRequestInterface $request, string $manifestPath, OperationAddress $address): void
    {
        $address = new \League\OpenAPIValidation\PSR7\OperationAddress($address->path, $address->method);

        $validator = (new \League\OpenAPIValidation\PSR7\ValidatorBuilder)
            ->fromYamlFile($manifestPath)
            ->getRoutedRequestValidator();

        try {
            $validator->validate($address, $request);
        } catch (ValidationFailed $e) {
            $message = 'Request validation failed. ' . $e->getMessage();
            if ($e->getPrevious()) {
                $message .= '. ' . $e->getPrevious()->getMessage();
            }
            throw new ValidationException($message, 0, $e);
        }
    }
}