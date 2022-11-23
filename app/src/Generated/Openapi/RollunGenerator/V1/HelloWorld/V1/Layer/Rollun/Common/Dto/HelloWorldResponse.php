<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Dto;

use ReflectionProperty;

class HelloWorldResponse
{
    public readonly object $metadata;
    public readonly object $warnings;

    public function __construct(
        public readonly string $data
    ){
    }

    public function hasMetadata(): bool
    {
        return $this->isInitialized('metadata');
    }

    public function hasWarnings(): bool
    {
        return $this->isInitialized('warnings');
    }

    private function isInitialized(string $property): bool
    {
        $rp = new ReflectionProperty(self::class, $property);
        $rp->setAccessible(true);
        return $rp->isInitialized($this);
    }
}