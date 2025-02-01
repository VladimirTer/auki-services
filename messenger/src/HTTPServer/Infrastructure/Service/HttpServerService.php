<?php

namespace App\HTTPServer\Infrastructure\Service;

use App\MessageDispatcher\Infrastructure\Services\MessageDispatcherService;
use OpenSwoole\HTTP\Server;
use Psr\Container\ContainerInterface;
use Swoole\Http\Request;
use Swoole\Http\Response;

class HttpServerService
{
    private Server $server;

    private MessageDispatcherService $messageDispatcherService;

    public function __construct(
        string $host,
        int $port,
        private readonly ?ContainerInterface $container = null,
    ) {
        $this->server = new Server($host, $port);
        $this->messageDispatcherService = $container->get(MessageDispatcherService::class);
    }

    public function start(): void
    {
        $this->server->on("start", [$this, 'onStart']);
        $this->server->on("request", [$this, 'onRequest']);
        $this->server->start();
    }

    public function onStart(Server $server): void
    {
        echo "OpenSwoole HTTP server is started at http://localhost:9503\n";
    }

    public function onRequest(Request $request, Response $response): void
    {
        $response->header("Content-Type", "application/json");

        $path = $request->server['request_uri'];

        if ($path == '/api/v1/handleMessage' && $request->server['request_method'] == 'POST') {
            $data = json_decode($request->getContent(), true);
            $method = $data['method'];
            $params = $data['params'];

            $this->messageDispatcherService->dispatchMessage($method, $params);

            $response->end(json_encode([
                'status' => 'success',
            ]));
        } else {
            $response->status(404);
            $response->end("404 Not Found\n");
        }
    }
}
