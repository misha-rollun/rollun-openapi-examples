<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Framework\Laminas\Utils\Serializer\Factory;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\Serializer\Denormalizer;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class DenormalizerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $propertiesMapping = $container->get('config')['serializer']['property_mapping'];
        return new Denormalizer($propertiesMapping);
    }
}