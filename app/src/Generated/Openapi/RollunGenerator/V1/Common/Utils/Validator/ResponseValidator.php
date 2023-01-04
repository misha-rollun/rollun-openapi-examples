<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator\Exception\ValidationException;
use League\OpenAPIValidation\PSR7\Exception\ValidationFailed;
use Psr\Http\Message\ResponseInterface;

class ResponseValidator
{
    /**
     * @throws ValidationException
     */
    public function validate(ResponseInterface $response, string $manifestPath, OperationAddress $address): void
    {
        $operation = new \League\OpenAPIValidation\PSR7\OperationAddress($address->path, $address->method) ;

        $validator = (new \League\OpenAPIValidation\PSR7\ValidatorBuilder)
            ->fromYamlFile($manifestPath)
            ->getResponseValidator();

        try {
            $validator->validate($operation, $response);
        } catch (ValidationFailed $e) {
            $message = 'Response validation failed. ' . $e->getMessage();
            if ($e->getPrevious()) {
                $message .= '. ' . $e->getPrevious()->getMessage();
            }
            throw new ValidationException($message, 0, $e);
        }
    }
}