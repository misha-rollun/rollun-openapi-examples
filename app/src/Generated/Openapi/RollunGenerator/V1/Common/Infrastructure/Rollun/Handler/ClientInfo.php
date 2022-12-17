<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Infrastructure\Rollun\Handler;

use ReflectionProperty;

class ClientInfo
{
    public string $language;
    public string $userAgent;

    public function hasLanguage(): bool
    {
        return $this->isInitialized('language');
    }

    public function hasUserAgent(): bool
    {
        return $this->isInitialized('userAgent');
    }

    private function isInitialized(string $property): bool
    {
        $rp = new ReflectionProperty(self::class, $property);
        $rp->setAccessible(true);
        return $rp->isInitialized($this);
    }
}