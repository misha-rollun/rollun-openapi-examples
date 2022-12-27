<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer;

class JsonCoder implements Coder
{
    public function encode(array $array): string
    {
        return json_encode($array);
    }

    public function decode(string $json): array
    {
        return json_decode($json, true);
    }

    public function isSupport(string $contentType): bool
    {
        $availableContentTypes = [
            'application/json',
            'application/vnd.rollun+json'
        ];
        return in_array($contentType, $availableContentTypes);
    }
}