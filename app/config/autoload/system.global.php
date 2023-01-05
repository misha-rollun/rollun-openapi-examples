<?php

use Laminas\ServiceManager\AbstractFactory\ReflectionBasedAbstractFactory;
use rollun\utils\Factory\AbstractServiceAbstractFactory;

return [
    'dependencies' => [
        'abstract_factories' => [
            AbstractServiceAbstractFactory::class,
            ReflectionBasedAbstractFactory::class
        ]
    ]
];