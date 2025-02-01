<?php

declare(strict_types=1);

use OpenSwoole\Coroutine\Http\Client;

require_once './vendor/autoload.php';

function sendHttpRequestToOtherService(string $message): void
{
    $client = new Client('messenger', 9503);

    $client->set([
        'timeout' => 1,
    ]);

    $client->setHeaders([
        'Content-Type' => 'application/json',
    ]);

    $response = $client->post('/api/v1/handleMessage', $message);

    echo "Запрос на сервис успешно отправлен" . PHP_EOL;

    // Закрываем клиента
    $client->close();
}

$server = new OpenSwoole\HTTP\Server("0.0.0.0", 9502);

$server->on("start", function (OpenSwoole\HTTP\Server $server) {
    echo "OpenSwoole HTTP server is started at http://localhost:9502\n";
});

$server->on("request", function (OpenSwoole\Http\Request $request, OpenSwoole\Http\Response $response) {
    $response->header("Content-Type", "application/json");
    $path = $request->server['request_uri'];

    if ($path == '/api/v1/handleMessage' && $request->server['request_method'] == 'POST') {
        sendHttpRequestToOtherService($request->getContent());
        $response->end(json_encode([
            'status' => 'success',
        ]));
    } else {
        $response->status(404);
        $response->end("404 Not Found\n");
    }
});

$server->start();
