<?php
namespace Slim4ModularApp;  

use Slim\App as SlimApp;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim4ModularApp\Common\Helper\Interceptor;
use Slim4ModularApp\Feture\RootController;

function RegisterRoute (SlimApp $app) {
    $app->any('/', function (ServerRequestInterface $request, ResponseInterface $response, array $args) {
        $data = array('name' => 'Rob', 'age' => 40); 

        return Interceptor::json($response, $data);
    })->setName('root');

	$app->get("/ping", fn () => "pong")->setName('ping');

    $app->get('/hello', [RootController::class, "hello"]);

    $app->get('/long-running-process', [RootController::class, ":longRunningProcess"]);
}