<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Service;

use App\Websocket\Domain\Service\WebsocketServer;
use App\Websocket\Infrastructure\Service\WebsocketServerService;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ServiceContainerConfigurator
{
    public static function configure(ContainerBuilder $container): void
    {
        self::configureWebsocket($container);
    }

    private static function configureWebsocket(ContainerBuilder $container): void
    {
        // Domain
        $container->register(id: 'websocket-server', class: WebsocketServer::class);
        $container->register(
            id: 'websocket-facade',
            class: \App\Websocket\Domain\Service\WebsocketServerFacade::class
        )->addArgument(new Reference(id: 'websocket-server'));

        // Operation
        $container->register(
            id: 'operation-websocket-service',
            class: \App\Websocket\Operation\Service\WebsocketServer::class
        )->addArgument(new Reference(id: 'websocket-facade'));

        // Infrastructure
        $container->register(id: 'websocket-service', class: WebsocketServerService::class)
            ->addArgument(argument: '0.0.0.0')
            ->addArgument(argument: 8085)
            ->addArgument(new Reference(id: 'operation-websocket-service'));
    }
}