<?php

declare(strict_types=1);

namespace App\Websocket\Infrastructure\Enum;

enum WebsocketEventEnum: string
{
    case START = 'start';
    case OPEN = 'open';
    case MESSAGE = 'message';
    case CLOSE = 'close';
}