<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer\Factory;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer\QuerySerializer;
use Generated\Openapi\RollunGenerator\V1\Common\Utils\Query\Serializer\Strategy\FormNoExplode;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class QuerySerializerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new QuerySerializer([
            $container->get(FormNoExplode::class),
        ]);
    }
}