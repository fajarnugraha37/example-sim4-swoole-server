<?php

namespace Slim4ModularApp\Common\Helper; 

// use Psr\Http\Message\ResponseInterface;


class Interceptor {

    static function json($response, array $payload=[], int $httpStatus=200) {
        $response
            ->getBody()
            ->write(json_encode($payload));
            
        return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus($httpStatus);
    }
}