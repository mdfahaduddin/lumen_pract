<?php

/** @var \Laravel\Lumen\Routing\Router $router */


/*
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

$router->post('/mdfahad', function(){
    return 'I am Mohammad Fahad';
});
*/
/**optional perametars 
$router->post('/{name}/{age}[/{class}]',function($name ,$age, $class=null ){
    return $name. $age. $class;
});
*/

$router->get('/{name}', 'MyController@MyName');