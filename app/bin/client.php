<?php

declare(strict_types=1);

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello\OpenapiRequest;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\DTO\GetHelloQueryParameters;
use Laminas\ServiceManager\ServiceManager;

ini_set('display_errors', '1');
error_reporting(E_ALL ^ E_USER_DEPRECATED);

// Delegate static file requests back to the PHP built-in webserver
if (PHP_SAPI === 'cli-server' && $_SERVER['SCRIPT_FILENAME'] !== __FILE__) {
    return false;
}

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

/** @var ServiceManager $container */
$container = require 'config/container.php';

/** @var \Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Controller\GetHello\AbstractController $client */
$client = $container->get(\Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Client\Controller\GetHello\LocalhostController::class);

$request = new OpenapiRequest();
$request->query = new GetHelloQueryParameters();
$request->query->name = 'misha';
$result = $client->handle($request);

var_dump($result);