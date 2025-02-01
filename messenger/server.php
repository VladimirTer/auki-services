<?php

declare(strict_types=1);
require_once './vendor/autoload.php';

use App\HTTPServer\Infrastructure\Service\HttpServerService;
use App\Kernel;

$kernel = new Kernel('dev', true);
$kernel->boot();

$container = $kernel->getContainer();

/** @var HttpServerService $server */
$server = $container->get(HttpServerService::class);
$server->start();

