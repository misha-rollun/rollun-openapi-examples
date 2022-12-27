<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer;

interface Strategy
{
    public function serialize(string $name, mixed $value, string $type): string;
    public function deserialize(string $name, string $query, string $type): mixed;

    public function isSupport(string $style, bool $explode): bool;
}