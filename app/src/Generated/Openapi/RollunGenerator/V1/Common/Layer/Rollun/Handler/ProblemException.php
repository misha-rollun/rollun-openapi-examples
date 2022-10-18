<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler;

use InvalidArgumentException;

class ProblemException extends \Exception
{
    private array $data;
    
    public function __construct(
        string $title,
        string $detail,
        int $status,
        string $type,
        string $instance,
        array $context
    )
    {
        $this->validateStatus($status);
        parent::__construct("$title: $detail", $status);
        $this->data = array_merge([
            'title' => $title,
            'detail' => $detail,
            'status' => $status,
            'type' => $type,
            'instance' => $instance,
        ], $context);
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
        return $this->data['title'];
    }

    /**
     * @return string
     */
    public function getDetail(): string
    {
        return $this->data['detail'];
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->data['status'];
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->data['type'];
    }

    /**
     * @return string
     */
    public function getInstance(): string
    {
        return $this->data['instance'];
    }

    public function getData(): array
    {
        return $this->data;
    }
}