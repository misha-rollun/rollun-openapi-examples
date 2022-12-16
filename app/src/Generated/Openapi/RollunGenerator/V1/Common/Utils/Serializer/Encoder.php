<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer;

interface Encoder
{
    public function encode(array $array): string;

    public function decode(string $json): array;

    public function isSupport(string $contentType): bool;
}