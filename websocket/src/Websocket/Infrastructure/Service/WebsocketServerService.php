<?php

namespace App\Websocket\Infrastructure\Service;

use App\Websocket\Infrastructure\Enum\WebsocketEventEnum;
use App\Websocket\Operation\Service\WebsocketServer;
use App\Websocket\Operation\Dto\ConnectionOpenedDto;
use App\Websocket\Operation\Dto\MessageReceivedDto;
use App\Websocket\Operation\Dto\ConnectionClosedDto;
use Swoole\Http\Request;
use Swoole\WebSocket\Frame;
use Swoole\WebSocket\Server;

class WebsocketServerService
{
    private Server $server;
    private WebsocketServer $facade;

    public function __construct(string $host, int $port, WebsocketServer $facade)
    {
        $this->server = new Server($host, $port);
        $this->facade = $facade;
    }

    public function start(): void
    {
        $this->server->on(WebsocketEventEnum::START->value, [$this, 'onStart']);
        $this->server->on(WebsocketEventEnum::OPEN->value, [$this, 'onOpen']);
        $this->server->on(WebsocketEventEnum::MESSAGE->value, [$this, 'onMessage']);
        $this->server->on(WebsocketEventEnum::CLOSE->value, [$this, 'onClose']);

        $this->server->start();
    }

    public function onStart(Server $server): void
    {
        $this->facade->onStart();
    }

    public function onOpen(Server $server, Request $request): void
    {
        $dto = new ConnectionOpenedDto($request->fd);
        $this->facade->onOpen($dto);
    }

    public function onMessage(Server $server, Frame $frame): void
    {
        $dto = new MessageReceivedDto($frame->fd, $frame->data);
        $this->facade->onMessage($dto);

    }

    public function onClose(Server $server, int $fd): void
    {
        $dto = new ConnectionClosedDto($fd);
        $this->facade->onClose($dto);
    }
}
