<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Listeners;

use App\Shared\Infrastructure\Event\ConnectionEvent;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

#[AsEventListener]
class ConnectionEventListener
{
    public function __invoke(ConnectionEvent $event): void
    {
        var_dump($event);
    }
}