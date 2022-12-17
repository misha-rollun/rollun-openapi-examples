<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Infrastructure\Rollun\Handler;

class Status
{
    private const PENDING = 'pending';
    private const FULFILLED = 'fulfilled';
    private const REJECTED = 'rejected';

    public function __construct(private string $value)
    {
    }

    public function isPending(): bool
    {
        return $this->value === self::PENDING;
    }

    public function isFulfilled(): bool
    {
        return $this->value === self::FULFILLED;
    }

    public function isRejected(): bool
    {
        return $this->value === self::REJECTED;
    }

    public static function fulfilled(): self
    {
        return new self(self::FULFILLED);
    }

    public static function pending(): self
    {
        return new self(self::PENDING);
    }

    public static function rejected(): self
    {
        return new self(self::REJECTED);
    }
}