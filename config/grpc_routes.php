<?php

use Hyperflex\HttpServer\Router\Router;

Router::addGroup('/grpc.hi', function () {
    Router::post('/sayHello', 'App\Controllers\HiController@sayHello');
});
