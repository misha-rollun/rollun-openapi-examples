<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler;

use InvalidArgumentException;

class Problem
{
    public function __construct(
        private string $title,
        private string $detail,
        private int $status,
        private string $type,
        private string $instance,
        private array $context
    )
    {
        self::validateStatus($status);
    }

    private static function validateStatus(int $status): void
    {
        if ($status < 100 || $status >= 600) {
            throw new InvalidArgumentException('Status code must be between 100 and 599.');
        }
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDetail(): string
    {
        return $this->detail;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getInstance(): string
    {
        return $this->instance;
    }

    /**
     * @return array
     */
    public function getContext(): array
    {
        return $this->context;
    }
}