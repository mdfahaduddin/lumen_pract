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

$router->post('/catch','MyController@Catch');

$router->get('/db','ExampleController@testConnection');
$router->get('/selectdata','ExampleController@selectData');

//CURD ope
$router->get('/details','DetailsController@DetailsSelect');

$router->delete('/details','DetailsController@DetailsDelete');

$router->put('/details','DetailsController@DetailsUpdate');

$router->post('/details','DetailsController@DetailsCreate');

//Query Builder

$router->get('/builder','QueryBuilderController@AllRow');

$router->get('/builder2','QueryBuilderController@SingleRow');

$router->get('/builder3','QueryBuilderController@SingleRowFind');

$router->get('/builder4','QueryBuilderController@PluckMethod');

$router->get('/builder5','QueryBuilderController@RowCount');

$router->get('/builder6','QueryBuilderController@Max');

$router->get('/builder7','QueryBuilderController@Min');

$router->get('/builder8','QueryBuilderController@Avg');

$router->get('/builder9','QueryBuilderController@Sum');

//CURD query

$router->post('/builderinsert','QueryBuilderController@Insert');

$router->put('/builderupdate','QueryBuilderController@Update');

$router->delete('/builderdelete','QueryBuilderController@Delete');