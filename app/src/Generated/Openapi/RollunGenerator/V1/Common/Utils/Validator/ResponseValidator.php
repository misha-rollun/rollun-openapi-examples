<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator;

use Psr\Http\Message\ResponseInterface;

interface ResponseValidator
{
    /**
     * @return ValidationError[]
     */
    public function validate(ResponseInterface $request, array $openapiSchema);
}