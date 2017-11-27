<?php
/**
 * Created by PhpStorm.
 * User: antonnovozilov
 * Date: 18.11.17
 * Time: 17:49
 */

namespace ChatApp;
use Ratchet\MessageComponentInterface;
use Ratchet\ComponentInterface;
use Ratchet\ConnectionInterface;


class chat implements MessageComponentInterface {

    protected $clients;

    function __construct() {
        $this->clients = new \SplObjectStorage;               //SplObjectStorage - хранилище объектов
    }

    function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);                         //добавляем объект в контейнер
        echo "Connection established ({$conn->resourceId})\n";
    }


    function onMessage(ConnectionInterface $from, $msg)
    {
        foreach ($this->clients as $client) {                  //раскручиваем что записалось в хранилище
            if($client !== $from) {                            //проверяем кто отправил
                $client->send($msg);
            }
        }
    }


    function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);                         //удаляем соединение
        echo "Connection ({$conn->resourceId}) closed \n";
    }

    function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "An error has occured: {$e->getMessage()}";
        $conn->close();                                        //в случае ошибки закрываем соединение
    }


}