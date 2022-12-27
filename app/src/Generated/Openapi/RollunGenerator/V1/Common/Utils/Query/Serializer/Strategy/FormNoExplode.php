<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer\Strategy;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer\Strategy;

class FormNoExplode implements Strategy
{
    public function serialize(string $name, mixed $value, string $type): string
    {
        switch ($type) {
            case 'string':
            case 'integer':
            case 'number':
            case 'boolean':
                return "$name=$value";
            case 'array':
                return "$name=" . implode(',', $value);
            case 'object':
                throw new \Exception('Not implemented');
            default:
                throw new \RuntimeException('Unknown type ' . $type);
        }
    }

    public function deserialize(string $name, string $query, string $type): mixed
    {
        parse_str($query, $parsed);
        foreach ($parsed as $key => $value) {
            if ($key === $name) {
                switch ($type) {
                    case 'string':
                        return $value;
                    case 'integer':
                        return (int)$value;
                    case 'number':
                        return (float)$value;
                    case 'boolean':
                        return (bool)$value;
                    case 'array':
                        return explode(',', $value);
                    case 'object':
                        throw new \Exception('Not implemented');
                    default:
                        throw new \RuntimeException('Unknown type ' . $type);
                }
            }
        }
        throw new \RuntimeException('Cannot find ' . $name . ' in query string');
    }

    public function isSupport(string $style, bool $explode): bool
    {
        return $style === 'form' && $explode === false;
    }
}