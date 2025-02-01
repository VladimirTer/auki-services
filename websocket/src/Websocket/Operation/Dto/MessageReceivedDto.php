<?php

namespace App\Websocket\Operation\Dto;

class MessageReceivedDto
{
    private int $fd;
    private string $message;

    public function __construct(int $fd, string $message)
    {
        $this->fd = $fd;
        $this->message = $message;
    }

    public function getFd(): int
    {
        return $this->fd;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
