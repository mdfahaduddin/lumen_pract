<?php

/** @var \Laravel\Lumen\Routing\Router $router */



$router->get('/get', function () use ($router) {
    return 'From get met';
});

$router->post('/post', function () use ($router) {
    return 'i am post';
});

$router->put('/put', function () use ($router) {
    return 'i am put';
});

$router->delete('/delete', function () use ($router) {
    return 'i am delete';
});