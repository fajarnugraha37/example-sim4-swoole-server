<?php 
declare(strict_types=1);

use function Slim4ModularApp\Bootstrap\Server;

require __DIR__ . '/../vendor/autoload.php';


if( !session_id() ) session_start();

$server = Server();

$server->start();