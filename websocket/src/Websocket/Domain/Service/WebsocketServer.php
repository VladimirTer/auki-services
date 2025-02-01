<?php

declare(strict_types=1);

namespace App\Websocket\Domain\Service;

use App\Websocket\Operation\Dto\ConnectionClosedDto;
use App\Websocket\Operation\Dto\ConnectionOpenedDto;
use App\Websocket\Operation\Dto\MessageReceivedDto;
use OpenSwoole\Coroutine\Http\Client;

class WebsocketServer
{
    public function onStart(): void
    {
        echo "Server Started" . PHP_EOL;
    }

    public function onOpen(ConnectionOpenedDto $dto): void
    {
        echo "Server Open" . PHP_EOL;
    }


    public function onMessage(MessageReceivedDto $dto): void
    {
        echo "Server Message" . PHP_EOL;

        $data = json_decode($dto->getMessage(), true);
        if (empty($data['type']) || empty($data['content'])) {
            echo "Некорректная структура сообщения" . PHP_EOL;
            return;
        }

        if ($data['type'] === 'rpc') {
            $this->sendHttpRequestToOtherService($data['content']);
        } else {
            echo sprintf("Неизвестный тип сообщения тип сообщения: %s", $data['type'] ?? 'null');
        }
    }


    public function onClose(ConnectionClosedDto $dto)
    {
        echo "Server Close" . PHP_EOL;
    }

    private function sendHttpRequestToOtherService(string $message): void
    {
        $client = new Client('service-aggregator', 9502);

        $client->set([
            'timeout' => 1,
        ]);

        $client->setHeaders([
            'Content-Type' => 'application/json',
        ]);

        $response = $client->post('/api/v1/handleMessage', $message);

        echo "Запрос на сервис успешно отправлен" . PHP_EOL;

        $client->close();
    }

}