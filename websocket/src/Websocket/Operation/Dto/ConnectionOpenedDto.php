<?php

namespace App\Websocket\Operation\Dto;

readonly class ConnectionOpenedDto
{
    public function __construct(private int $fd)
    {
    }

    public function getFd(): int
    {
        return $this->fd;
    }
}
