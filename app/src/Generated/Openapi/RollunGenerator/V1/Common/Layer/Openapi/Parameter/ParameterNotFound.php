<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Layer\Openapi\Parameter;

use RuntimeException;
use Throwable;

class ParameterNotFound extends RuntimeException
{
    public function __construct(
        private string $in,
        private string $parameterName,
        string $message = "Parameter not found.",
        int $code = 0,
        ?Throwable $previous = null
    ){
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function getIn(): string
    {
        return $this->in;
    }

    public function getParameterName(): string
    {
        return $this->parameterName;
    }
}