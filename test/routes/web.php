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

$router->get('get/{name}', 'MyController@InfoGet');

$router->post('create/{name}', 'MyController@Create');

$router->put('update/{name}/{age}/{city}/{class}', 'MyController@UpdateInfo');

$router->delete('delete/{name}', 'MyController@DeleteInfo');

$router->get('/array','MyController@ArrayTest');

$router->get('/array2','MyController@ArrayTest2');

$router->get('/redirect1','MyController@FirstMethForRedirect');

$router->get('/redirect2','MyController@SecondMethForRedirect');

$router->get('/download','MyController@Download');