<?php

declare(strict_types=1);

use Generated\Openapi\RollunGenerator\V1\Common\Framework\Laminas\Utils\Query\Serializer\Factory\QuerySerializerFactory;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer\QuerySerializer;

return [
    'dependencies' => [
        'factories' => [
            QuerySerializer::class => QuerySerializerFactory::class
        ],
    ],
];