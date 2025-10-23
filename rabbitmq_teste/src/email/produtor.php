<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

// Conexão com o RabbitMQ
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();
$channel->queue_declare('fila_emails', false, true, false, false);

// Dados do e-mail
$email = [
    'to' => 'mateusnunes-97@Hotmail.com',
    'subject' => 'Teste de E-mail via RabbitMQ',
    'body' => 'Olá! Este é um e-mail enviado por um consumidor PHP via RabbitMQ.'
];

$msg = new AMQPMessage(json_encode($email), ['delivery_mode' => 2]); // persistente
$channel->basic_publish($msg, '', 'fila_emails');

echo "Mensagem de e-mail enviada para a fila!\n";

$channel->close();
$connection->close();