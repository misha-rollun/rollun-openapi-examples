<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer;

class QuerySerializer
{
    public function serialize(array $queryParams, string $format, bool $explode): string
    {
        // TODO: https://swagger.io/docs/specification/serialization#query
        // На перший час можна зробити підтримку лише style:form, explode: false
        throw new \Exception('Not implemented');
    }

    public function deserialize(string $queryParams, string $format, bool $explode): array
    {
        // TODO: зеркально методу serialize
        throw new \Exception('Not implemented');
    }
}