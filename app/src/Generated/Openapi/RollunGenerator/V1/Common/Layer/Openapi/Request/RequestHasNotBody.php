<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Layer\Openapi\Request;

use RuntimeException;
use Throwable;

class RequestHasNotBody extends RuntimeException
{
    public function __construct(
        string $message = "Request has not body.",
        int $code = 0,
        ?Throwable $previous = null
    ){
        parent::__construct($message, $code, $previous);
    }

}