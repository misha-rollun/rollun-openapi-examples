<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\DTO;

use ReflectionProperty;

class Error
{
    public Problem $problem;

    /**
     * @var Warning[]
     */
    public array $warnings;
}