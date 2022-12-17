<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Validator;

use Psr\Http\Message\ServerRequestInterface;

interface RequestValidator
{
    /**
     * @return ValidationError[]
     */
    public function validate(ServerRequestInterface $request, array $openapiSchema);
}