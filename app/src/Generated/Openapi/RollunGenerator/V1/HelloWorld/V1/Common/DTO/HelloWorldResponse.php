<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\DTO;

use ReflectionProperty;

class HelloWorldResponse
{
    public string $data;
    public object $metadata;

    /**
     * @var Warning[]
     */
    public array $warnings;

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