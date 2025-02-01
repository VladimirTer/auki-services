<?php

declare(strict_types=1);

namespace App\Websocket\Domain\Service;

use App\Websocket\Operation\Dto\ConnectionClosedDto;
use App\Websocket\Operation\Dto\ConnectionOpenedDto;
use App\Websocket\Operation\Dto\MessageReceivedDto;

readonly class WebsocketServerFacade
{
    public function __construct(private WebsocketServer $websocketServer)
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