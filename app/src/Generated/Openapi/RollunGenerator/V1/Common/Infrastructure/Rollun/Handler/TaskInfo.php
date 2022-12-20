<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Infrastructure\Rollun\Handler;

class TaskInfo
{
    public string $id;
    /** @var int Retru after in seconds if exist */
    public int $retryAfter;

    public function hasRetryAfter(): bool
    {
        return $this->isInitialized('retryAfter');
    }

    private function isInitialized(string $property): bool
    {
        $rp = new ReflectionProperty(self::class, $property);
        $rp->setAccessible(true);
        return $rp->isInitialized($this);
    }
}