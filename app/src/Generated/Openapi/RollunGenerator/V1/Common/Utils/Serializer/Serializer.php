<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer;

class Serializer
{
    private string $toObject;

    public function __construct(
        private $contentTypeToFormatMapping,
        private \Symfony\Component\Serializer\Serializer $serializer,
    )
    {
    }

    public function serialize(object $data, string $contentType): string
    {
        $format = $this->getFormat($contentType);
        return $this->serializer->serialize($data, $format);
    }

    public function deserialize(string $from, string $to, string $contentType)
    {
        $format =  $this->getFormat($contentType);
        return $this->serializer->deserialize($from, $to, $format);
    }

    public function normalize(object $from): array
    {
        return $this->serializer->normalize($from);
    }

    public function denormalize(array $from, string $to): object
    {
        return $this->serializer->denormalize($from, $to);
    }

    private function getFormat(string $contentType): string
    {
        if (isset($this->contentTypeToFormatMapping[$contentType])) {
            return $this->contentTypeToFormatMapping[$contentType];
        }
        throw new \RuntimeException('No format found for ' . $contentType);
    }
}