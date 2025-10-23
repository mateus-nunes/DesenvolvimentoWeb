<?php

require_once '../vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('hello', false, true, false, false);
$txt = 'nf1231232';
$msg = new AMQPMessage($txt);
$channel->basic_publish($msg, '', 'hello');

echo " [x] Sent: $txt\n";

$channel->close();
$connection->close();