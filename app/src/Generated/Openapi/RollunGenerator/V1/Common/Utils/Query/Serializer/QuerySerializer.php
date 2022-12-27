<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer;

class QuerySerializer
{
    public function __construct(
        /** @var  Strategy[] */
        private array $strategies
    )
    {
    }

    public function serialize(array $queryParams, array $openapiSchema): string
    {
        $openapiSchema = array_column($openapiSchema, null, 'name');
        $result = '';
        foreach ($queryParams as $name => $value) {
            $schema = $openapiSchema[$name];
            $strategy = $this->getStrategy($schema['style'], $schema['explode']);
            if ($result === '') {
                $result = $strategy->serialize($name, $value, $schema['schema']['type']);
            } else {
                $result .= "&" . $strategy->serialize($name, $value, $schema['schema']['type']);
            }
        }
        return $result;
    }

    public function deserialize(string $queryParams, array $openapiSchema): array
    {
        $openapiSchema = array_column($openapiSchema, null, 'name');
        $result = [];
        foreach ($openapiSchema as $name => $schema) {
            $strategy = $this->getStrategy($schema['style'], $schema['explode']);
            $result[$name] = $strategy->deserialize($name, $queryParams, $schema['schema']['type']);
        }
        return $result;
    }

    private function getStrategy(string $style, bool $explode): Strategy
    {
        foreach ($this->strategies as $strategy) {
            if ($strategy->isSupport($style, $explode))
            {
                return $strategy;
            }
        }
        throw new \RuntimeException("Style = $style, explode = $explode is not supported.");
    }
}