<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Dto;

class Error
{
    public Problem $problem;

    /**
     * @var Warning[]
     */
    public array $warnings;

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