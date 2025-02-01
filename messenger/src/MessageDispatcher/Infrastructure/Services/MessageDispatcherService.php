<?php

declare(strict_types=1);

namespace App\MessageDispatcher\Infrastructure\Services;

use App\Shared\Infrastructure\Event\ConnectionEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

readonly class MessageDispatcherService
{
    public function __construct(
        private EventDispatcherInterface $dispatcher,
    ) { }

    public function dispatchMessage(string $type, array $params): mixed
    {
        $serializer = new Serializer([new ObjectNormalizer()]);

        $eventClass = match ($type) {
            'ConnectionEvent' => ConnectionEvent::class,
            default => throw new \Exception(sprintf("Неизвестное сообщение типа: %s", $type))
        };

        $event = $serializer->denormalize($params, $eventClass);

        return $this->dispatcher->dispatch($event);
    }
}
