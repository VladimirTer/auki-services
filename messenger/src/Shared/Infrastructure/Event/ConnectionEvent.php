<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Event;

class ConnectionEvent
{
    public int $userId;
    public string $message;
}