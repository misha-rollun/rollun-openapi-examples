<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer;

class Denormalizer
{
    private string $toObject;

    public function __construct(private array $metadata)
    {
    }

    public function withDiscriminator(string $field, array $mapping): self
    {
        throw new \Exception('Not implemented');
    }

    public function toObject(string $className): self
    {
        $clone = clone $this;
        $clone->toObject = $className;
        return $clone;
    }

    /**
     * @return object
     * @throws \ReflectionException
     */
    public function denormalize(array $from): object
    {
        if (isset($this->toObject)) {
            $reflection = new \ReflectionClass($this->toObject);
            $properties = $reflection->getProperties(\ReflectionProperty::IS_PUBLIC);
            $result = new $this->toObject();
            foreach ($properties as $property) {
                $propertyName = $property->getName();
                $fromPropertyName = $this->metadata[$this->toObject]['properties'][$propertyName]['serializedName'] ?? $propertyName;
                if (isset($from[$fromPropertyName])) {
                    $result->{$propertyName} = $from[$fromPropertyName];
                }
            }
            return $result;
        }
        throw new \RuntimeException('Please specify to object or discriminator.');
    }
}