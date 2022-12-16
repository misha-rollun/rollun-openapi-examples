<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer;

class Normalizer
{
    public function __construct(private array $propertiesMapping)
    {
    }

    public function normalize(object $from): array
    {
        $reflection = new \ReflectionClass($from);
        $properties = $reflection->getProperties(\ReflectionProperty::IS_PUBLIC);
        $result = [];
        foreach ($properties as $property) {
            if ($property->isInitialized($from)) {
                $propertyName = $property->getName();
                $toPropertyName = $this->propertiesMapping[$from::class][$propertyName] ?? $propertyName;
                $result[$toPropertyName] = $this->propertyIsObject($property) ?
                    $this->normalize($from->{$propertyName}) : $from->{$propertyName};
            }
        }
        return $result;
    }

    private function propertyIsObject(\ReflectionProperty $property): bool
    {
        return !in_array($property->getType()->getName(), ['string','int', 'float', 'bool']);
    }
}