<?php

use DI\ContainerBuilder;
use Slim\App;

require_once __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder();

// set up settings
$containerBuilder->addDefinitions(__DIR__ . '/container.php');

// php-di container instance
$container = $containerBuilder->build();

$app = $container->get(App::class);

// register routes & middleware

// what is going on with ()() ??
// may be dependency injection?
// try var_dump($app) before and after
(require __DIR__ . '/routes.php')($app);
(require __DIR__ . '/middleware.php')($app);

return $app;
