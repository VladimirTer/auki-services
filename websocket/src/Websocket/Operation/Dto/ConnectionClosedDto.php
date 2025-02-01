<?php

namespace App\Websocket\Operation\Dto;

namespace App\Websocket\Operation\Dto;

class ConnectionClosedDto
{
    private int $fd;

    public function __construct(int $fd)
    {
        $this->fd = $fd;
    }

    public function getFd(): int
    {
        return $this->fd;
    }
}
