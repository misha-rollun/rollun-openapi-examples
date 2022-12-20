<?php

declare(strict_types=1);

use Generated\Openapi\RollunGenerator\V1\Common\Framework\Laminas\Utils\Serializer\Factory\DenormalizerFactory;
use Generated\Openapi\RollunGenerator\V1\Common\Framework\Laminas\Utils\Serializer\Factory\SerializerFactory;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Denormalizer;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Serializer;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloQueryParameters;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\GetHelloRequestHeaders;

return [
    'dependencies' => [
        'factories' => [
            Denormalizer::class => DenormalizerFactory::class,
            Serializer::class => SerializerFactory::class
        ],
        'aliases' => [
        ],
    ],
];