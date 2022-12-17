<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto;

use ReflectionProperty;

class GetHelloRequestHeaders
{
    /**
     * Генерується завжди, незалежно від того чи вказаний він в маніфесті
     */
    public string $contentType;

    public function hasContentType(): bool
    {
        return $this->isInitialized('contentType');
    }

    private function isInitialized(string $property): bool
    {
        $rp = new ReflectionProperty(self::class, $property);
        $rp->setAccessible(true);
        return $rp->isInitialized($this);
    }
}