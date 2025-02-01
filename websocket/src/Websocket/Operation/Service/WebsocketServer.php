<?php

declare(strict_types=1);

namespace App\Websocket\Operation\Service;

use App\Websocket\Domain\Service\WebsocketServerFacade;
use App\Websocket\Operation\Dto\ConnectionClosedDto;
use App\Websocket\Operation\Dto\ConnectionOpenedDto;
use App\Websocket\Operation\Dto\MessageReceivedDto;

readonly class WebsocketServer
{
    public function __construct(private WebsocketServerFacade $websocketServer)
    {
    }

    public function onStart(): void
    {
        $this->websocketServer->onStart();
    }

    public function onOpen(ConnectionOpenedDto $dto): void
    {
        $this->websocketServer->onOpen($dto);
    }

    public function onMessage(MessageReceivedDto $dto): void
    {
        $this->websocketServer->onMessage($dto);
    }

    public function onClose(ConnectionClosedDto $dto): void
    {
        $this->websocketServer->onClose($dto);
    }
}