<?php

declare(strict_types=1);

use App\Shared\Infrastructure\Service\ServiceContainerConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;

require_once './vendor/autoload.php';

$container = new ContainerBuilder();

ServiceContainerConfigurator::configure($container);

$server = $container->get(id: 'websocket-service');

$server->start();