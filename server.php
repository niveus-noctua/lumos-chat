<?php

    require_once('vendor/autoload.php');

    use Ratchet\Server\IoServer;
    use Ratchet\Http\HttpServer;
    use Ratchet\WebSocket\WsServer;
    use ChatApp\chat;

    $chat = new chat();

    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                $chat
            )
        ), 8080
    );

    $server->run();

?>