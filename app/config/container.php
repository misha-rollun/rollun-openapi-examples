<?php
/**
 * @copyright Copyright © 2014 Rollun LC (http://rollun.com/)
 * @license LICENSE.md New BSD License
 */

declare(strict_types = 1);

use Laminas\ServiceManager\AbstractFactory\ReflectionBasedAbstractFactory;
use Laminas\ServiceManager\ServiceManager;

// Load configuration
$config = require __DIR__ . '/config.php';

$dependencies = $config['dependencies'];
$dependencies['services']['config'] = $config;

// to be always last
$dependencies['abstract_factories'][] = ReflectionBasedAbstractFactory::class;

// Build container
return new ServiceManager($dependencies);
