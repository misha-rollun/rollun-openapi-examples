<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer;

class Serializer
{
    public function __construct(
        /** @var Encoder[] $encoders */
        private array $encoders,
        private Normalizer $normalizer
    )
    {
    }

    public function serialize(object $object, string $contentType): string
    {
        $encoder = $this->getEncoder($contentType);
        $array = $this->normalize($object);
        return $encoder->encode($array);
    }

    public function normalize(object $from): array
    {
        return $this->normalizer->normalize($from);
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