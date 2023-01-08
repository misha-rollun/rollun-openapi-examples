<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Utils\HttpClient\Factory;

use Generated\Openapi\RollunGenerator\V1\Common\Utils\HttpClient\HttpClient;
use GuzzleHttp\Client;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class HttpClientFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new HttpClient(new Client());
    }
}