<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer;

class Serializer
{
    private string $toObject;

    public function __construct(
        /** @var Encoder[] $encoders */
        private array $encoders,
        private Normalizer $normalizer,
        private Denormalizer $denormalizer
    )
    {
    }

    public function serialize(object $object, string $contentType): string
    {
        $encoder = $this->getEncoder($contentType);
        $array = $this->normalize($object);
        return $encoder->encode($array);
    }

    public function deserialize(string $from, string $contentType)
    {
        $decoder =  $this->getEncoder($contentType);
        $array = $decoder->decode($from);
        return $this->denormalize($array);
    }

    public function normalize(object $from): array
    {
        return $this->normalizer->normalize($from);
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

    public function denormalize(array $from): object
    {
        if ($this->toObject) {
            return $this->denormalizer->toObject($this->toObject)->denormalize($from);
        }
        throw new \RuntimeException('Please specify to object or discriminator');
    }

    private function getEncoder(string $contentType): Encoder
    {
        foreach ($this->encoders as $encoder)
        {
            /** @var Encoder $encoder */
            if ($encoder->isSupport($contentType)) {
                return $encoder;
            }
        }
        throw new \RuntimeException('No encoders found to support ' . $contentType);
    }
}