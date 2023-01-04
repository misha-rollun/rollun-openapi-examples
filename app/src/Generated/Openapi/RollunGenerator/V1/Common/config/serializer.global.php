<?php

declare(strict_types=1);

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Factory\SerializerFactory;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Serializer;

return [
    'dependencies' => [
        'factories' => [
            Serializer::class => SerializerFactory::class
        ],
        'aliases' => [
        ],
    ],
];