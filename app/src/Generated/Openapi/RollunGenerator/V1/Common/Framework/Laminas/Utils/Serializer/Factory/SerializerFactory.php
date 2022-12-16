<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Framework\Laminas\Utils\Serializer\Factory;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\JsonEncoder;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Normalizer;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Serializer;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class SerializerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new Serializer(
            [new JsonEncoder()],
            $container->get(Normalizer::class)
        );
    }
}